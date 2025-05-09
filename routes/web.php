<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'dash']);
Route::get('/spesialis', [DokterController::class, 'dokterSpesialis']);
Route::get('/umum', [DokterController::class, 'dokterUmum']);
Route::get('/spesialis/{id}', [DokterController::class, 'show'])->name('spesialis.show');

