<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_name', 'CategoryPengunjung', 'price', 'is_active'
    ];

    public function ticketTransactions()
    {
        return $this->hasMany(TicketTransactions::class);
    }
}