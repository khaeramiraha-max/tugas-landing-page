<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', [
        'nama' => config('himpunan.nama'),
        'email' => config('himpunan.email'),
        'tagline' => config('himpunan.tagline'),
        'visi' => config('himpunan.visi'),
        'misi' => config('himpunan.misi')
    ]);
});