<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AlatController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {

    session(['login' => true]);

    return redirect('/alat');
});


Route::get('/logout', function () {
    session()->forget('login');

    return redirect('/login');
});

Route::resource('alat', AlatController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengembalian', PengembalianController::class);