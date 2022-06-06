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
        Schema::create('key_2d', function (Blueprint $table) {
            $table->id('key_2d_id');
            $table->unsignedBigInteger('soal_2d_id');
            $table->string('pilihan');
            $table->integer('value_pilihan');
            $table->timestamps();
            $table->foreign('soal_2d_id')->references('soal_2d_id')->on('soal_2d')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
