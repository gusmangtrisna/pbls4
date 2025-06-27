<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ScanQr extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-qr-code'; // Ikon navigasi
    protected static string $view = 'filament.pages.scan-qr';
    protected static ?string $title = 'Scan Kode QR'; // Judul halaman
    protected static ?string $navigationGroup = 'URUSAN PENGUNJUNG';
    // Anda bisa menambahkan properti atau metode Livewire di sini
    // misalnya, untuk menyimpan hasil scan atau mengirimnya ke backend
    public $scannedResult = null;

    public function mount(): void
    {
        // Inisialisasi awal jika diperlukan
    }

    public function updatedScannedResult($value)
    {
        // Metode ini akan dipanggil oleh Alpine.js ketika scannedResult diperbarui
        // Di sini Anda bisa memproses hasil scan, misalnya:
        // - Menyimpannya ke database
        // - Mengarahkan ulang pengguna
        // - Menampilkan notifikasi
        \Filament\Notifications\Notification::make()
            ->title('Kode QR berhasil dipindai!')
            ->body('Hasil: ' . $value)
            ->success()
            ->send();

        // Contoh: Jika hasil adalah URL, Anda bisa mengarahkannya
        // if (filter_var($value, FILTER_VALIDATE_URL)) {
        //     $this->redirect($value);
        // }
    }
}