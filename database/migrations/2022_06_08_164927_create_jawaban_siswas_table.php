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
        Schema::create('jawaban_siswa', function (Blueprint $table) {
            $table->id('jawaban_siswa_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('paket_soal_id');
            $table->integer('token');
            $table->json('jawaban');
            $table->string('result');
            $table->timestamps();
            $table->foreign('batch_id')->references('batch_id')->on('batch_ujian')->onDelete('cascade');
            $table->foreign('paket_soal_id')->references('paket_soal_id')->on('paket_soal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_siswa');
    }
};
