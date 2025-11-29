<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman daftar ucapan
Route::get('/home', [WishController::class, 'index'])->name('home');

// Form kirim ucapan
Route::post('/wish', [WishController::class, 'store'])->name('wish.store');

