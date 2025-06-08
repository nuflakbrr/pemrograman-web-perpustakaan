<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    // Kategori Buku
    Route::get('kategori', [KategoriBukuController::class, 'index'])->name('kategori.index');
    Route::get('kategori/create', [KategoriBukuController::class, 'create'])->name('kategori.create');
    Route::get('kategori/edit', [KategoriBukuController::class, 'edit'])->name('kategori.edit');

    // Buku
    Route::get('buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('buku/create', [BukuController::class, 'create'])->name('buku.create');
    Route::get('buku/edit', [BukuController::class, 'edit'])->name('buku.edit');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
