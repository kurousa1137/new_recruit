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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('clm01');
            $table->longText('clm02')->nullable();
            $table->longText('clm03')->nullable();
            $table->longText('clm04')->nullable();
            $table->longText('clm05')->nullable();
            $table->longText('clm06')->nullable();
            $table->longText('clm07')->nullable();
            $table->longText('clm08')->nullable();
            $table->longText('clm09')->nullable();
            $table->longText('clm10')->nullable();
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
        Schema::dropIfExists('job');
    }
};
