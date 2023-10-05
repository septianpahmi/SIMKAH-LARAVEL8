<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarNikah extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kua',
        'nikah_di',
        'tanggal_akad',
        'surat',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
