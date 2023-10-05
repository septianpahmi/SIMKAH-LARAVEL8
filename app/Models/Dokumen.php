<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumen extends Model
{
    use HasFactory;
    protected $fillable=[
    'suratketerangan_suami',
        'persetujuan_suami',
        'akta_suami',
        'ktp_suami',
        'kk_suami',
        'paspoto2x3_suami',
        'paspoto4x6_suami',
        'surat_izin_suami',
        'surat_dispen_suami',
        'surat_cerai_suami',
        'surat_komandan_suami',
        'surat_kematian_suami',
        'surat_wna_suami',
        'surat_rekomendasi_suami',
        'suratketerangan_istri',
        'persetujuan_istri',
        'akta_istri',
        'ktp_istri',
        'kk_istri',
        'paspoto2x3_istri',
        'paspoto4x6_istri',
        'surat_izin_istri',
        'surat_dispen_istri',
        'surat_cerai_istri',
        'surat_komandan_istri',
        'surat_kematian_istri',
        'surat_wna_istri',
        'surat_rekomendasi_istri',
        'pedoman',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
