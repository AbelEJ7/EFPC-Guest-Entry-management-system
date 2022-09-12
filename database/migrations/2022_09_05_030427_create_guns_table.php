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
        Schema::create('guns', function (Blueprint $table) {
            $table->id();
            //  $table->integer('guest_id')->unsigned();
            // $table->foreign('guest_id')->references('id')->on('guests')->constrained()->cascadeOnDelete();
            $table->string('fname')->nullable();  
            $table->string('lname')->nullable();  
            $table->string('cupon_number')->nullable();  
            $table->string('gun_type')->nullable();  
            $table->string('side_number')->nullable();  
        
         
            $table->boolean('isTaken')->default(0)->change()->nullable();  
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
        Schema::dropIfExists('guns');
    }
};
