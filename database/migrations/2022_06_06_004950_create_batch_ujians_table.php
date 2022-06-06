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
        Schema::create('batch_ujian', function (Blueprint $table) {
            $table->id('batch_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->date('tanggal_pelaksanaan');
            $table->time('jam_pelaksanaan');
            $table->json('siswa');
            $table->timestamps();
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_ujians');
    }
};
