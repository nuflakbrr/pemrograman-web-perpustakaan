<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\PeminjamanController;

Route::middleware('auth')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    // Kategori Buku
    Route::get('kategori', [KategoriBukuController::class, 'index'])->name('kategori.index');
    Route::get('kategori/create', [KategoriBukuController::class, 'create'])->name('kategori.create');
    Route::post('kategori/create', [KategoriBukuController::class, 'store'])->name('kategori.store');
    Route::get('kategori/{id}', [KategoriBukuController::class, 'edit'])->name('kategori.edit');
    Route::put('kategori/{id}', [KategoriBukuController::class, 'update'])->name('kategori.update');
    Route::delete('kategori/{id}', [KategoriBukuController::class, 'destroy'])->name('kategori.destroy');

    // Buku
    Route::get('buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('buku/create', [BukuController::class, 'create'])->name('buku.create');
    Route::post('buku/create', [BukuController::class, 'store'])->name('buku.store');
    Route::get('buku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    // Anggota
    Route::resource('anggota', AnggotaController::class)->parameters([
        'anggota' => 'anggota'
    ]);

    // petugas
    Route::get('petugas', [PetugasController::class, 'index'])->name('petugas.index');
    Route::get('petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
    Route::post('petugas/create', [PetugasController::class, 'store'])->name('petugas.store');
    Route::get('petugas/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
    Route::put('petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');
    Route::delete('petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

    // Peminjaman
    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('peminjaman/create', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('peminjaman/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');

    // Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    // Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
    // Route::get('anggota/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
    // Route::delete('/anggota', [AnggotaController::class, 'destroy'])->name('anggota.destroy');


    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
