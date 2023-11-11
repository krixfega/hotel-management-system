<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            //$table->id();
            // Other chat message fields
           // $table->unsignedBigInteger('user_id');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');
            // Alternatively, you can explicitly define the type of the foreign key:
            // $table->foreignId('user_id')->constrained('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
