<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TicketTransactions;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class QrScanner extends Component
{
    public $scannedQrCode = '';
    public $scanResult = null;
    public string $scanStatus = '';

    public function processQrCode($qrCodeData)
    {
        $this->scannedQrCode = $qrCodeData;
        $this->scanResult = null;
        $this->scanStatus = '';

        Log::info("QR Code Scanned: " . $qrCodeData);


        $transaction = TicketTransactions::where('order_id', $qrCodeData)->first();

        if (!$transaction) {
            $this->scanResult = 'Tiket tidak ditemukan.';
            $this->scanStatus = 'error';
            Notification::make()
                ->title('Tiket Tidak Ditemukan')
                ->body('QR Code tidak cocok dengan transaksi yang ada.')
                ->danger()
                ->send();
            return;
        }
        $transaction->loadMissing('user');

        switch ($transaction->status) {
            case 'success':
                $transaction->status = 'thankyu, Tiket udh di pakek';
                $transaction->save();

                $this->scanResult = 'Tiket valid! Pengunjung: ' . ($transaction->user->name ?? 'N/A') . ' - Total: ' . ($transaction->total_dewasa + $transaction->total_anak) . ' tiket.';
                $this->scanStatus = 'success';
                Notification::make()
                    ->title('Thankyu udh tuker')
                    ->body('Tiket berhasil divalidasi dan status diperbarui.')
                    ->success()
                    ->send();
                break;

            case 'checked_in':
                $this->scanResult = 'Tiket sudah digunakan pada ' . $transaction->updated_at->format('d M Y H:i:s') . '.';
                $this->scanStatus = 'info';
                Notification::make()
                    ->title('Tiket Sudah Digunakan')
                    ->body('Tiket ini sudah divalidasi sebelumnya.')
                    ->warning()
                    ->send();
                break;

            default:
                $this->scanResult = 'Status tiket tidak valid: ' . $transaction->status . '.';
                $this->scanStatus = 'error';
                Notification::make()
                    ->title('Status Tiket Tidak Valid')
                    ->body('Tiket ini memiliki status yang tidak memungkinkan validasi.')
                    ->danger()
                    ->send();
                break;
        }
    }

    public function render()
    {
        return view('livewire.qr-scanner');
    }
}