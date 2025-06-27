<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_purchase',
        'purchase_date',
        'phone_number',
        'Category',
        'total_dewasa',
        'total_anak',
        'status',
        'midtrans_token',
        'order_id',

    ];

    public function ticketDetails()
    {
        return $this->hasMany(TicketDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}