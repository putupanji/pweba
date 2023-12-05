<?php

use Illuminate\Support\Facades\Route;

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
// "/" itu artinya adalah main classnya, kalau di java adalah main.java
Route::get('/', function () {
    return view('welcome');
});

Route::get('jumlah', function () {
    $hasil = 2 + 3;
    return "Hasil Penjumlahan = ". (string) $hasil;
});

Route::get('halo', function () {
    return "Selamat Datang di situs web";
});

// kalau maubuat view('namafile') harus buat file baru (nama-file).blade.php = .blade.php harus ada dalam penulisan nama file
Route::get('blog', function () {
    return view('blog');

});
Route::get('tugas1', function () {
    return view('tugaslinktree');

});
Route::get('tugas2', function () {
    return view('tugasKastemisasi');

});
Route::get('tugas3', function () {
    return view('tugasLandingPage');

});
Route::get('pertemuan1', function () {
    return view('pertamaHello');

});
Route::get('pertemuan2', function () {
    return view('keduaLink');

});
Route::get('pertemuan3', function () {
    return view('ketigaStyle');

});
Route::get('pertemuan4', function () {
    return view('keempatResponsive');

});
Route::get('pertemuan5', function () {
    return view('kelimaValidasi1');

});
Route::get('pertemuan6', function () {
    return view('keenamJs1');

});
Route::get('ETS2', function () {
    return view('Contact');

});
Route::get('ETS3', function () {
    return view('Shop');

});

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampilkanjam/{jam}', 'App\Http\Controllers\DosenController@showjam'); // "/{nama variabel}"

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses'); // utk membuat form gunakan "post"

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
