<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pendaftaran');
            $table->unsignedBigInteger('suami_id');
            $table->unsignedBigInteger('istri_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['Diproses', 'Diverifikasi', 'Ditolak']);
            $table->timestamps();

            $table->foreign('suami_id')->references('id')->on('suamis');
            $table->foreign('istri_id')->references('id')->on('istris');
            $table->foreign('jadwal_id')->references('id')->on('daftar_nikahs');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
