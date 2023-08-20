<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKaryawan extends Model
{
    protected $table = 'data_karyawan';

    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'kota',
        'status',
        'foto'
    ];

    // Definisikan relasi atau method lain di sini jika diperlukan
}
