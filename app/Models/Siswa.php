<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswa';

    protected $fillable = [
        'id_siswa',
        'nama_siswa',
        'nis',
        'kelamin',
        'alamat_siswa',
        'telpon_siswa',
        'username',
        'password',
    ];
}