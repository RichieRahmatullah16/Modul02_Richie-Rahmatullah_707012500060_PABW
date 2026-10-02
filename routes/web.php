<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;

/*
|--------------------------------------------------------------------------
| Web Routes - LaporBanjir
|--------------------------------------------------------------------------
| Sistem Pelaporan Banjir BPBD Kabupaten Bandung
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', [LaporanBanjirController::class, 'index'])->name('home');

// Form Laporan Banjir (GET: tampilkan form, POST: proses data)
Route::get('/lapor', [LaporanBanjirController::class, 'formLaporan'])->name('lapor.form');
Route::post('/lapor', [LaporanBanjirController::class, 'submitLaporan'])->name('lapor.submit');

// Halaman Tentang
Route::get('/tentang', [LaporanBanjirController::class, 'tentang'])->name('tentang');

// Halaman Panduan
Route::get('/panduan', [LaporanBanjirController::class, 'panduan'])->name('panduan');

// Halaman Kontak
Route::get('/kontak', [LaporanBanjirController::class, 'kontak'])->name('kontak');
Route::get('/kontak/form', [LaporanBanjirController::class, 'formKontak'])->name('kontak.form');
Route::post('/kontak/form', [LaporanBanjirController::class, 'submitKontak'])->name('kontak.submit');
