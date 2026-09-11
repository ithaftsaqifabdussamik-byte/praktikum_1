<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata', function () {
    return view('Biodata');
});
Route::get('/biodata_ortu', function () {
    return view('Biodata_ortu');
});
Route::get('/apaya/biodata', function () {
    $nama = "Jane Doe";
    // return view('biodata.data');
    return view('biodata.data', ['nyamah' => $nama]);     
});
Route::get('/alumni', function () {
    return view('Alumni_sekolah');     
});
Route::get('/ithaf/biodata', function () {
    $judul = "BIODATA";
    $nama = "Ithaf Tsaqif";
    $foto = 'images/ithaf.jpeg';
    $ttl = "Pamekasan-24-February-2007";
    $nim = "253107050011";
    $prodi = "Manajemen Informatika";
    $jurusan = "Teknologi Informasi";
    $alamat = "JL. P Trunojoyo";
    $hp = "085785727716";
    return view('biodata.Biodata',['judul' => $judul,
    'nama' => $nama,
    'foto' => $foto,
    'ttl' => $ttl,
    'nim' => $nim,
    'prodi' => $prodi,
    'jurusan' => $jurusan,
    'alamat' => $alamat,
    'hp' => $hp]);
});
Route::get('/ortu/biodata', function () {
    $judul = "BIODATA ORTU";
    $nama_ayah = "Riad Abdillah";
    $nama_ibu = "Wahyu Arianie";
    $ttl_ayah = "Pamekasan-08-september-1987";
    $ttl_ibu = "Pamekasan-12-juni-1990";
    $pekerjaan_ayah = "Dinas Sosial";
    $pekerjaan_ibu = "guru";
    $alamat_ayah = "Murtajih";
    $alamat_ibu = "JL. P Trunojoyo";
    $hp_ayah = "085298735523";
    $hp_ibu = "085723561889";
    return view('biodata.Biodata_ortu',['judul' => $judul,
    'nama_ayah' => $nama_ayah,
    'nama_ibu' => $nama_ibu,
    'ttl_ayah' => $ttl_ayah,
    'ttl_ibu' => $ttl_ibu,
    'pekerjaan_ayah' => $pekerjaan_ayah,
    'pekerjaan_ibu' => $pekerjaan_ibu,
    'alamat_ayah' => $alamat_ayah,
    'alamat_ibu' => $alamat_ibu,
    'hp_ayah' => $hp_ayah,
    'hp_ibu' => $hp_ibu]);
});
Route::get('/sekolah/alumni', function () {
    $jenjang = "SMA";
    $nama_sekolah_sma = "SMA 3 Pamekasan";
    $jurusan = "Kurikulum Merdeka";
    $tahun_masuk_sma = "2022";
    $tahun_lulus_sma = "2025";
    $jenjang2 = "perguruan tinggi";
    $nama_perguruan_tinggi = "Politeknik Negeri Malang";
    $tahun_masuk_pt = "2025";
    $jurusan_pt = "Manajemen Informatika";

    return view('biodata.Alumni_sekolah', 
    [
    'jnjng' => $jenjang,
    'jng_sekolah' => $nama_sekolah_sma,
    'jrsnsma' => $jurusan, 
    'masuk_sma' => $tahun_masuk_sma,
    'lulus_sma' => $tahun_lulus_sma,
    'jnjng2' => $jenjang2,
    'jng_pt' => $nama_perguruan_tinggi,
    'masuk_pt' => $tahun_masuk_pt,
    'jrsnpt' => $jurusan_pt]);
});