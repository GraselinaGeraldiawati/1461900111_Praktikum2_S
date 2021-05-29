<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'data_guru';

    protected $fillable = [
        'id_guru',
        'nama_guru',
        'nip',
        'kelamin',
        'alamat_guru',
        'telpon_guru',
        'username',
        'password',
    ];
}