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
        Schema::create('key_pilgan', function (Blueprint $table) {
            $table->id('key_pilgan_id');
            $table->unsignedBigInteger('soal_pg_id');
            $table->string('pilihan')->unique();
            $table->integer('value_pilihan');
            $table->timestamps();
            $table->foreign('soal_pg_id')->references('soal_pg_id')->on('soal_pilgan')->onDelete('cascade');
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
