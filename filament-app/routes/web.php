<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketPurchased;
use App\Models\TicketTransactions;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MidtransController;
Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::view('/tiketWna', 'tiketWna')->name('tiketWna')->middleware('auth');
Route::get('/tiketLokal', [TransaksiController::class, 'showForm'])->name('tiketLokal')->middleware('auth');

Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store')->middleware('auth');

//tes email
Route::get('/tes-email', function () {
    $transaction = TicketTransactions::with('user')->where('status', 'success')->latest()->first();

    if (!$transaction) {
        return "Tidak ada transaksi sukses yang ditemukan di database untuk dijadikan data tes.";
    }

    // Kirim email ke alamat tujuan. Ini akan ditangkap oleh Mailtrap.
    Mail::to('cahyafajarpianto@gmail.com')->send(new TicketPurchased($transaction));

    return "Email sedang diproses oleh antrian. Cek Mailtrap atau log Anda.";
});

// Midtrans Notification Handler
Route::post('/midtrans/notification', [MidtransController::class, 'notificationHandler']);