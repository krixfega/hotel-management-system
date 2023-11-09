<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFeaturePermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('user_feature_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('feature_id')->constrained('features');
            // Add more permission-specific fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_feature_permissions');
    }
}
