<?php

namespace App\Models;

use App\Models\User;
use App\Models\Istri;
use App\Models\Suami;
use App\Models\DaftarNikah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable=[
        'kode_pendaftaran',
        'suami_id',
        'istri_id',
        'jadwal_id',
        'user_id',
        'status',
    ];

    public function suamiId()
    {
        return $this->belongsTo(Suami::class, 'suami_id');
    }
    
    public function istriId()
    {
        return $this->belongsTo(Istri::class, 'istri_id');
    }
    public function jadwalId()
    {
        return $this->belongsTo(DaftarNikah::class, 'jadwal_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function generateNomorPendaftaran()
    {
        // Logika pembuatan nomor pendaftaran sesuai kebutuhan Anda
        $nomor_urut = Pendaftaran::max('id') + 1; // Mengambil nomor urut dari ID terakhir
        $prefix = 'SIMKAH/Warugkondang'; // Prefix nomor pendaftaran
        $tahun = date('Y'); // Tahun saat ini

        // Format nomor pendaftaran
        $kode_pendaftaran = str_pad($nomor_urut, 4, '0', STR_PAD_LEFT).'/'. $prefix .'/'. $tahun;

        return $kode_pendaftaran;
    }

    public function save(array $options = [])
    {
        // Menentukan nomor pendaftaran sebelum menyimpan
        $this->kode_pendaftaran = self::generateNomorPendaftaran();

        parent::save($options);
    }
}
