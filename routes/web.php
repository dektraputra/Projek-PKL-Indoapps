<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/lembaga', function () {
    return view('lembaga');
});
