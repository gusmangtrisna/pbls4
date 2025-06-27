<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketTransactions;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketPurchased;
use Illuminate\Support\Facades\Log;

class MidtransController extends Controller
{
    /**
     * Handle Midtrans notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notificationHandler(Request $request)
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');

        try {
            $notification = new Notification();
        } catch (\Exception $e) {
            Log::error('Midtrans Notification Error: ' . $e->getMessage());
            return response()->json(['error' => 'Invalid notification'], 400);
        }

        $transactionStatus = $notification->transaction_status;
        $fraudStatus = $notification->fraud_status;
        $orderId = $notification->order_id;

        $transaction = TicketTransactions::where('order_id', $orderId)->with('user')->first(); // Eager load user relationship

        if (!$transaction) {
            Log::warning("Midtrans notification: Transaction with order_id {$orderId} not found.");
            return response()->json(['error' => 'Transaction not found'], 404);
        }

        // Jangan proses transaksi yang sudah selesai atau gagal
        if ($transaction->status === 'success' || $transaction->status === 'failed') {
            Log::info("Midtrans notification: Transaction {$orderId} already processed with status {$transaction->status}.");
            return response()->json(['message' => 'Transaction already processed'], 200);
        }

        $signatureKey = hash('sha512', $orderId . $notification->status_code . $notification->gross_amount . Config::$serverKey);
        if ($notification->signature_key != $signatureKey) {
            Log::error("Midtrans notification: Invalid signature for order_id {$orderId}.");
            return response()->json(['error' => 'Invalid signature'], 403);
        }

        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            if ($fraudStatus == 'accept') {
                // Transaksi berhasil
                $this->handleSuccessTransaction($transaction);
            }
        } else if ($transactionStatus == 'cancel' || $transactionStatus == 'deny' || $transactionStatus == 'expire') {
            // Transaksi gagal atau dibatalkan
            $transaction->status = 'failed';
            $transaction->save();
            Log::info("Midtrans notification: Transaction {$orderId} failed or expired.");
        }

        return response()->json(['message' => 'Notification processed'], 200);
    }

    /**
     * Handle successful transaction.
     *
     * @param \App\Models\TicketTransactions $transaction
     * @return void
     */
    protected function handleSuccessTransaction(TicketTransactions $transaction)
    {
        // Update status transaksi
        $transaction->status = 'success';
        $transaction->save();

        // Pastikan user terkait ada sebelum mencoba mengirim email
        if (!$transaction->user) {
            Log::error("Failed to send e-ticket for order_id: {$transaction->order_id}. User not found for user_id: {$transaction->user_id}.");
            return; // Hentikan proses jika user tidak ditemukan
        }

        // Kirim email dengan e-tiket dan QR code
        try {
            Mail::to($transaction->user->email)->send(new TicketPurchased($transaction));
            Log::info("E-ticket sent for order_id: {$transaction->order_id}");
        } catch (\Exception $e) {
            Log::error("Failed to send e-ticket for order_id: {$transaction->order_id}. Error: " . $e->getMessage());
        }
    }
}