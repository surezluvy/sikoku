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
        Schema::create('paket_soal', function (Blueprint $table) {
            $table->id('paket_soal_id');
            $table->unsignedBigInteger('user_add')->nullable();
            $table->string('nama_paket');
            $table->json('soal');
            $table->bigInteger('harga')->nullable();
            $table->time('waktu_pengerjaan');
            $table->timestamps();
            $table->foreign('user_add')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_soal');
    }
};
