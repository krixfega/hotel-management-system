<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentConnectionsTable extends Migration
{
    public function up()
    {
        Schema::create('payment_connections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add more payment connection-specific fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_connections');
    }
}   