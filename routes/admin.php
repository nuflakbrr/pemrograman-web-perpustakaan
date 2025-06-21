<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

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
    Route::get('buku/edit', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    // Anggota
    Route::resource('anggota', AnggotaController::class)->parameters([
        'anggota' => 'anggota'
    ]);
    // Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    // Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
    // Route::get('anggota/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
    // Route::delete('/anggota', [AnggotaController::class, 'destroy'])->name('anggota.destroy');


    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
