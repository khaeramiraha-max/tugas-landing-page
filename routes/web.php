<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    return view('home');
});

// FORM PENDAFTARAN
Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/daftar', function () {
    return back()->with('success', 'Pendaftaran berhasil!');
});

// FORM ASPIRASI
Route::get('/aspirasi', function () {
    return view('aspirasi');
});

Route::post('/aspirasi', function () {
    return back()->with('success', 'Aspirasi berhasil dikirim!');
});