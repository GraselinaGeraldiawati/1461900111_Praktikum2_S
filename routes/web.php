<?php

use Illuminate\Support\Facades\Route;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Ruangan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/select', function () {
    $query = Guru::select('id_guru', 'nip', 'nama_guru', 'kelamin', 'telpon_guru', 'alamat_guru')->get();
    return view('select0111', ['data' => $query]);
});

Route::get('/selectwhere', function () {
    $query = Siswa::select('id_siswa','nis', 'nama_siswa', 'kelamin', 'telpon_siswa', 'alamat_siswa')->where('nis', '50406041')->get();
    return view('selectwhere0111', ['data' => $query]);
});

Route::get('/selectjoin', function () {
    $query = Ruangan::select('nis', 'nama_siswa', 'nama_kelas', 'kelamin', 'telpon_siswa', 'alamat_siswa', 'nama_kelas')
    ->join('data_siswa', 'tbl_ruangan.id_siswa', '=', 'data_siswa.id_siswa')
    ->join('setup_kelas', 'tbl_ruangan.id_kelas', '=', 'setup_kelas.id_kelas')
    ->get();
    return view('selectjoin0111', ['data' => $query]);
});

Route::get('/selectjoindenganlike', function () {
    $query = Ruangan::select('nis', 'nama_siswa', 'nama_kelas', 'kelamin', 'telpon_siswa', 'alamat_siswa', 'nama_kelas')
    ->join('data_siswa', 'tbl_ruangan.id_siswa', '=', 'data_siswa.id_siswa')
    ->join('setup_kelas', 'tbl_ruangan.id_kelas', '=', 'setup_kelas.id_kelas')
    ->where('kelamin', 'like', '%perempuan%')
    ->get();
    return view('selectjoindenganlike0111', ['data' => $query]);
});