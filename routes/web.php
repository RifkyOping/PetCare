<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'dash']);
Route::get('/spesialis', [Dashboard::class, 'dokterSpesialis']);
Route::get('/umum', [Dashboard::class, 'dokterUmum']);
