<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");
Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login/auth', [AuthController::class, 'auth'])->name("auth");
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name("registrasi");
Route::post('/registrasi/submit', [AuthController::class, 'create_new_user'])->name("create_new_user");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
Route::prefix('in')->middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/data/tiket', [TiketController::class, 'index'])->name("index_data_tiket");
    Route::post('/data/tiket/{id}/bayar', [TiketController::class, 'upload_bukti_bayar'])->name("upload_bukti_bayar");
    Route::post('/data/tiket/{id}/update', [TiketController::class, 'update_status_tiket'])->name("update_status_tiket");
    Route::get('/data/tiket/tambah', [TiketController::class, 'create'])->name("create_data_tiket");
    Route::post('/data/tiket/tambah/simpan', [TiketController::class, 'store'])->name("store_data_tiket");
    Route::get('/data/pemesanan', [PemesananController::class, 'index'])->name("index_data_pemesanan");
    Route::get('/data/jadwal', [JadwalController::class, 'index'])->name("index_data_jadwal");
    Route::post('/data/jadwal/{id}/update', [JadwalController::class, 'update'])->name("update_status_jadwal");
    Route::get('/data/jadwal/tambah', [JadwalController::class, 'create'])->name("create_data_jadwal");
    Route::post('/data/jadwal/tambah/simpan', [JadwalController::class, 'store'])->name("store_data_jadwal");
    Route::get('/data/kendaraan', [KendaraanController::class, 'index'])->name("index_data_kendaraan");
    Route::get('/data/kendaraan/create', [KendaraanController::class, 'create'])->name("create_data_kendaraan");
    Route::post('/data/kendaraan/store', [KendaraanController::class, 'store'])->name("store_data_kendaraan");
    Route::get('/data/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])->name("edit_data_kendaraan");
    Route::post('/data/kendaraan/{id}/update', [KendaraanController::class, 'update'])->name("update_data_kendaraan");
    Route::get('/data/sopir', [SopirController::class, 'index'])->name("index_data_sopir");
    Route::get('/data/sopir/create', [SopirController::class, 'create'])->name("create_data_sopir");
    Route::post('/data/sopir/store', [SopirController::class, 'store'])->name("store_data_sopir");
    Route::get('/data/sopir/{id}/edit', [SopirController::class, 'edit'])->name("edit_data_sopir");
    Route::post('/data/sopir/{id}/update', [SopirController::class, 'update'])->name("update_data_sopir");
    Route::get('/data/pelanggan', [PelangganController::class, 'index'])->name("index_data_pelanggan");
    Route::get('/data/pelanggan/create', [PelangganController::class, 'create'])->name("create_data_pelanggan");
    Route::post('/data/pelanggan/store', [PelangganController::class, 'store'])->name("store_data_pelanggan");
    Route::get('/data/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name("edit_data_pelanggan");
    Route::post('/data/pelanggan/{id}/update', [PelangganController::class, 'update'])->name("update_data_pelanggan");
});