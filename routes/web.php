<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Middleware\PreventBackHistory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'dash'])->name('dashboard');
Route::get('/spesialis', [DokterController::class, 'spesialis']);
Route::get('/umum', [DokterController::class, 'umum']);
Route::get('/spesialis/{id}', [DokterController::class, 'show'])->name('spesialis.show');

Route::get('/hewan/{jenis}', [HewanController::class, 'filterByJenis'])->name('hewan.jenis');
Route::get('/detailHewan/{id}', [HewanController::class, 'detail'])->name('hewan.show');

Route::get('/login', [AutentikasiController::class, 'index'])->name('login');
Route::post('/login/submit', [AutentikasiController::class, 'login'])->name('login.submit');

// Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');

Route::get('/register', [AutentikasiController::class, 'register'])->name('regis');
Route::post('/register/submit', [AutentikasiController::class, 'submitRegistrasi'])->name('regis.submit');


Route::middleware(['auth', PreventBackHistory::class])->group(function () {
    Route::post('/home', [AutentikasiController::class, 'logout'])->name('logout');
});

// Route::get('/profil', [PenggunaController::class, 'index'])->name('profil');
Route::middleware('auth')->get('/profil/detail', [PenggunaController::class, 'detail'])->name('profile.show');
