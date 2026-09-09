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