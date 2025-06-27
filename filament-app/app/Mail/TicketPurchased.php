<?php

namespace App\Mail;

use App\Models\TicketTransactions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketPurchased extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $userName;
    public string $orderId;
    public string $purchaseDate;
    public string $category;
    public int $totalDewasa;
    public int $totalAnak;
    public int $totalPurchase;
    public $qrCode;

    /**
     * Create a new message instance.
     */
    public function __construct(TicketTransactions $transaction)
    {
        try {
            Log::info('[TicketPurchased] Processing job for order_id: ' . $transaction->order_id);

            $transaction->loadMissing('user');

            $this->userName = $transaction->user?->name ?? 'Pelanggan';
            $this->orderId = $transaction->order_id;
            $this->purchaseDate = $transaction->purchase_date;
            $this->category = $transaction->Category;
            $this->totalDewasa = $transaction->total_dewasa;
            $this->totalAnak = $transaction->total_anak;
            $this->totalPurchase = $transaction->total_purchase;

            $this->qrCode = QrCode::format('svg')->size(200)->generate($this->orderId);

            Log::info('[TicketPurchased] Data extracted successfully for order_id: ' . $this->orderId);
        } catch (\Throwable $e) {
            Log::error('[TicketPurchased] FAILED for order_id: ' . ($transaction->order_id ?? 'UNKNOWN'));
            Log::error('[TicketPurchased] Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Get the message envelope.
     *
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'E-Tiket Taman Edelweis Bali Anda',
        );
    }

    /**
     * Get the message content definition.
     *
     */
    public function content()
    {
        return new Content(
            view: 'emails.ticket',
        );
    }

    /**
     * Get the attachments for the message.
     *
     */
    public function attachments(): array
    {
        return [];
    }
}