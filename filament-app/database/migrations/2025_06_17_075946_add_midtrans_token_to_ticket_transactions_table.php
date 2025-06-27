<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMidtransTokenToTicketTransactionsTable extends Migration
{
    public function up()
    {
        Schema::table('ticket_transactions', function (Blueprint $table) {
            $table->string('midtrans_token')->nullable(); // Menambahkan kolom untuk menyimpan token Midtrans
        });
    }

    public function down()
    {
        Schema::table('ticket_transactions', function (Blueprint $table) {
            $table->dropColumn('midtrans_token'); // Menghapus kolom jika migrasi dibatalkan
        });
    }
}