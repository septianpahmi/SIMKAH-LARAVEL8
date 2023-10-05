<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class waliNikah extends Model
{
    use HasFactory;
    protected $fillable = [
        'warganegara',
        'negara_asal',
        'paspor',
        'nik',
        'nama',
        'ayah_wali',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'status',
        'hubungan',
        'sebab_wali_hakim',
        'agama',
        'pekerjaan',
        'telp',
        'alamat',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
