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
        Schema::create('gun_recipents', function (Blueprint $table) {
            $table->id();
            $table->integer('recipents_id')->unsigned();
             $table->integer('gun_id')->unsigned();
            // $table->foreign('recipents_id')->references('id')->on('recipents')->constrained()->cascadeOnDelete();
            //             $table->foreign('gun_id')->references('id')->on('guns')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('gun_recipents');
    }
};
