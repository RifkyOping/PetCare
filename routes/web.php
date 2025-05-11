<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HewanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'dash']);
Route::get('/spesialis', [DokterController::class, 'spesialis']);
Route::get('/umum', [DokterController::class, 'umum']);
Route::get('/spesialis/{id}', [DokterController::class, 'show'])->name('spesialis.show');

Route::get('/hewan/{jenis}', [HewanController::class, 'filterByJenis'])->name('hewan.jenis');
Route::get('/detailHewan/{id}', [HewanController::class, 'detail'])->name('hewan.show');
// Route::get('/hewan', [HewanController::class, 'show']);

Route::get('/login', [AutentikasiController::class, 'index']);
