<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TicketTransactions;
use Midtrans\Config;
use Midtrans\Snap;

class TransaksiController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');
    }

    public function showForm()
    {
        return view('tiketLokal');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'Category'        => 'required|string',
        'phone_number'    => 'required|digits_between:10,15',
        'tanggal'         => 'required|date|after_or_equal:today',
        'adult'           => 'required|integer|min:0',
        'kids'            => 'required|integer|min:0',
        'total_purchase'  => 'required|integer|min:1',
    ]);

    $adult_qty = (int) $validated['adult'];
    $kids_qty = (int) $validated['kids'];
    $category = $validated['Category'];

    $adult_price = $category === 'WNA' ? 50000 : 30000;
    $kids_price = $category === 'WNA' ? 30000 : 20000;
    $total_purchase = ($adult_qty * $adult_price) + ($kids_qty * $kids_price);

    if ($total_purchase != $validated['total_purchase']) {
        return response()->json(['error' => 'Total pembelian tidak cocok.'], 400);
    }

    if ($total_purchase === 0) {
        return response()->json(['error' => 'Jumlah tiket minimal 1.'], 422);
    }


    //aku mau cek snap token
    // $existingTransaction = TicketTransactions::where('user_id', Auth::id())
    //     ->where('status', 'pending')
    //     ->whereDate('purchase_date', $validated['tanggal'])
    //     ->where('total_purchase', $total_purchase)
    //     ->first();

    // if ($existingTransaction && $existingTransaction->midtrans_token) {
    //     return response()->json(['snapToken' => $existingTransaction->midtrans_token]);
    // }

    // Kalau tidak ada, buat transaksi baru
    $transaction = TicketTransactions::create([
        'user_id'        => Auth::id(),
        'Category'       => $validated['Category'],
        'phone_number'   => $validated['phone_number'],
        'purchase_date'  => $validated['tanggal'],
        'total_dewasa'   => $validated['adult'],
        'total_anak'     => $validated['kids'],
        'total_purchase' => $total_purchase,
        'status'         => 'pending',
    ]);

    $orderId = 'ORDER-' . $transaction->id . '-' . time();

    $item_details = [];
    if ($adult_qty > 0) {
        $item_details[] = ['id' => 'TICKET-ADULT', 'price' => $adult_price, 'quantity' => $adult_qty, 'name' => 'Tiket Dewasa'];
    }
    if ($kids_qty > 0) {
        $item_details[] = ['id' => 'TICKET-KIDS', 'price' => $kids_price, 'quantity' => $kids_qty, 'name' => 'Tiket Anak-anak'];
    }

    $params = [
        'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $transaction->total_purchase,
        ],
        'customer_details' => [
            'first_name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => $validated['phone_number'],
        ],
        'item_details' => $item_details,
    ];

    try {
        $snapToken = Snap::getSnapToken($params);
        $transaction->midtrans_token = $snapToken;
        $transaction->order_id = $orderId;
        $transaction->save();

        return response()->json(['snapToken' => $snapToken]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

}