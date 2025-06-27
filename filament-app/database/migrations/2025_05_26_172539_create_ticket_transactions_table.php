<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('ticket_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_purchase', 10, 2);
            $table->enum('Category', ['Lokal', 'WNA'])->nullable();
            $table->integer('total_dewasa')->default(0);
            $table->integer('total_anak')->default(0);
            $table->timestamp('purchase_date')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ticket_transactions');
    }
}