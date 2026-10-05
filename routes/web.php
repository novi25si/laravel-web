<?php

use Illuminate\Support\Facades\Route;

Route::get('/pcr', function () {
    return view('Selamat Datang di Website Kampus PCR!');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($NoviAdel) {
    return 'Nama saya: '.$NoviAdel;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301099') {
    return 'NIM saya: '.$param1;
});
