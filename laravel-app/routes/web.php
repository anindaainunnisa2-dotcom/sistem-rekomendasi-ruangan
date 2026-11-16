<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RekomendasiController;

// Dashboard
Route::get('/', [DashboardController::class, 'index']);

// Data ruangan
Route::get('/ruangan', [RuanganController::class, 'index']);

// Jadwal perkuliahan
Route::get('/jadwal', [RuanganController::class, 'jadwal']);

// Form rekomendasi
Route::get('/rekomendasi', [RekomendasiController::class, 'index']);

// Proses rekomendasi
Route::post('/rekomendasi/proses', [RekomendasiController::class, 'proses']);

// Tentang aplikasi
Route::view('/tentang', 'tentang');

// Halaman informasi
Route::view('/informasi', 'tentang');
