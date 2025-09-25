<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', function () {
    return 'Hallo aku boxer';
});

/**
 * Display the specified resource.
 */

Route::get('/mahasiswa/{param1}',
[MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/profil', function () {
    return view('halaman-mahasiswa-profil');
});

Route::get('/detail', function () {
    return view('halaman-mahasiswa-detail');
});

Route::get('/nim/{param1?}', function ($param1) {
    return ('nim saya : '.$param1);
});
