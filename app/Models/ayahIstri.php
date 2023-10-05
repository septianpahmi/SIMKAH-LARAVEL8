<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayahIstri extends Model
{
    use HasFactory;
    protected $fillable = [
        'warganegara',
        'negara_asal',
        'paspor',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'agama',
        'pekerjaan',
        'alamat',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
