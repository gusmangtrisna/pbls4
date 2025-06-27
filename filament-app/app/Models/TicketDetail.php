<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_transaction_id',
        'ticket_id',
        'quantity',
        'price'
    ];

    public function ticketTransaction()
    {
        return $this->belongsTo(TicketTransactions::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}