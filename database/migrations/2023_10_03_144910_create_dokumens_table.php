<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table -> string('suratketerangan_suami')->nullable();
            $table -> string('persetujuan_suami')->nullable();
            $table -> string('akta_suami')->nullable();
            $table -> string('ktp_suami')->nullable();
            $table -> string('kk_suami')->nullable();
            $table -> string('paspoto2x3_suami')->nullable();
            $table -> string('paspoto4x6_suami')->nullable();
            $table -> string('surat_izin_suami')->nullable();
            $table -> string('surat_dispen_suami')->nullable();
            $table -> string('surat_cerai_suami')->nullable();
            $table -> string('surat_komandan_suami')->nullable();
            $table -> string('surat_kematian_suami')->nullable();
            $table -> string('surat_wna_suami')->nullable();
            $table -> string('surat_rekomendasi_suami')->nullable();
            $table -> string('suratketerangan_istri')->nullable();
            $table -> string('persetujuan_istri')->nullable();
            $table -> string('akta_istri')->nullable();
            $table -> string('ktp_istri')->nullable();
            $table -> string('kk_istri')->nullable();
            $table -> string('paspoto2x3_istri')->nullable();
            $table -> string('paspoto4x6_istri')->nullable();
            $table -> string('surat_izin_istri')->nullable();
            $table -> string('surat_dispen_istri')->nullable();
            $table -> string('surat_cerai_istri')->nullable();
            $table -> string('surat_komandan_istri')->nullable();
            $table -> string('surat_kematian_istri')->nullable();
            $table -> string('surat_wna_istri')->nullable();
            $table -> string('surat_rekomendasi_istri')->nullable();
            $table -> string('pedoman')->nullable();
            $table -> unsignedBigInteger('user_id');
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
        Schema::dropIfExists('dokumens');
    }
}
