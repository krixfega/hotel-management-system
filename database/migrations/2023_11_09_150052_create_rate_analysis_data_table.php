<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateAnalysisDataTable extends Migration
{
    public function up()
    {
        Schema::create('rate_analysis_data', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('rate', 8, 2);
            // Add more rate analysis-specific fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rate_analysis_data');
    }
}
