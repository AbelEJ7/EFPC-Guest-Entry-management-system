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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();  
            $table->string('lname')->nullable();  
              $table->string('licence_number')->nullable();  
            $table->string('sub_city')->nullable();  
          $table->string('car_type')->nullable();  
            $table->string('plate_number')->nullable();  
                        $table->string('dest_office')->nullable();  
            $table->boolean('isin')->default(0)->change()->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
