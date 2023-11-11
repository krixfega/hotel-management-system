<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->decimal('amount', 8, 2);
            $table->string('payment_method');
            // Add more payment-specific fields as needed
            $table->timestamps();
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('booking_id')->references('id')->on('bookings');
        });
    }

    public function down()
    {
    Schema::table('payments', function (Blueprint $table) {
        $table->dropForeign(['booking_id']);
    });

    Schema::dropIfExists('payments');
}
}
