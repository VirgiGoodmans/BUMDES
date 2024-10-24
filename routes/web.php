<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\WisataController;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk menampilkan daftar berita
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Route untuk menambah dan menyimpan pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');

// Route untuk menampilkan detail wisata
Route::get('/wisata/{id}', [WisataController::class, 'show'])->name('wisata.show');
