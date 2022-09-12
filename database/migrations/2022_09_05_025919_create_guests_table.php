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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();  
            $table->string('lname')->nullable();  
            $table->string('id_number')->nullable();  
            $table->string('sub_city')->nullable();  
          $table->string('woreda')->nullable();  
            $table->string('phone_number')->nullable();  
            $table->string('dest_office')->nullable();  
            $table->timestamps();
            $table->boolean('isin')->default(0)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
};
