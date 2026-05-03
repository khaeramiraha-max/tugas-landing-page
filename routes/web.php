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
=======
use Illuminate\Http\Request;

// ================= MAHASISWA (COOKIE) =================

// form
Route::get('/login-mahasiswa', function () {
    return view('login-mahasiswa');
});

// proses
Route::post('/login-mahasiswa', function (Request $request) {
    return redirect('/dashboard-mahasiswa')
        ->cookie('mahasiswa', $request->nama, 60);
});

// dashboard
Route::get('/dashboard-mahasiswa', function (Request $request) {
    if (!$request->cookie('mahasiswa')) {
        return redirect('/login-mahasiswa');
    }

    return view('dashboard-mahasiswa');
});

// logout
Route::get('/logout-mahasiswa', function () {
    return redirect('/login-mahasiswa')
        ->withCookie(cookie()->forget('mahasiswa'));
});


// ================= ADMIN (SESSION) =================

// form
Route::get('/login-admin', function () {
    return view('login-admin');
});

// proses
Route::post('/login-admin', function (Request $request) {

    if ($request->username == 'admin' && $request->password == '123') {
        session(['admin' => true]);
        return redirect('/dashboard-admin');
    }

    return back()->with('error', 'Login gagal!');
});

// dashboard
Route::get('/dashboard-admin', function () {

    if (!session('admin')) {
        return redirect('/login-admin');
    }

    return view('dashboard-admin');
});

// logout
Route::get('/logout-admin', function () {
    session()->forget('admin');
    return redirect('/login-admin');

});