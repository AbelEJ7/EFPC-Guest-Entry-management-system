<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_recipents', function (Blueprint $table) {
                        $table->id();
                        $table->integer('recipents_id')->unsigned();
             $table->integer('car_id')->unsigned();
                        // $table->foreign('recipents_id')->references('id')->on('recipents')->constrained()->cascadeOnDelete();
                        // $table->foreign('car_id')->references('id')->on('cars')->constrained()->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_recipents');
    }
};
