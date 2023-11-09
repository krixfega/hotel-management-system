<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPlatformsTable extends Migration
{
    public function up()
    {
        Schema::create('booking_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add more booking platform-specific fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_platforms');
    }
}
