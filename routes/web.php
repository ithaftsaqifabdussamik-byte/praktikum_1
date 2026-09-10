<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata', function () {
    return view('biodata');
});
Route::get('/biodata_ortu', function () {
    return view('biodata_ortu');
});
Route::get('/apaya/biodata', function () {
    $nama = "Jane Doe";
    // return view('biodata.data');
    return view('biodata.data', ['nyamah' => $nama]);     
});
Route::get('/coba/biodata', function () {
    $judul = "BIODATA";
    $nama = "Ithaf Tsaqif";
    $ttl = "Pamekasan-24-February-2007";
    $nim = "253107050011";
    $prodi = "Manajemen Informatika";
    $jurusan = "Teknologi Informasi";
    $alamat = "JL. P Trunojoyo";
    $hp = "085785727716";
    return view('biodata.Biodata',['judul' => $judul,
    'nama' => $nama,
    'ttl' => $ttl,
    'nim' => $nim,
    'prodi' => $prodi,
    'jurusan' => $jurusan,
    'alamat' => $alamat,
    'hp' => $hp]);
});