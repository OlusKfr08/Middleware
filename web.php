<?php

use Illuminate\Support\Facades\Route;

Route::get('/pendaftaran-ktp', function () {
    return 'Selamat datang di halaman Pendaftaran KTP Online';
})->middleware('check.age');
