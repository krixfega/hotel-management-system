<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelManagersTable extends Migration
{
    public function up()
    {
        Schema::create('channel_managers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add more channel manager-specific fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('channel_managers');
    }
}
