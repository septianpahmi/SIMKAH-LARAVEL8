<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suamis', function (Blueprint $table) {
            $table->id();
            $table->string('warganegara');
            $table->string('negara_asal')->nullable();
            $table->string('paspor')->nullable();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('umur');
            $table->string('status');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('telp');
            $table->string('email');
            $table->string('alamat');
            $table->string('foto');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('suamis');
    }
}
