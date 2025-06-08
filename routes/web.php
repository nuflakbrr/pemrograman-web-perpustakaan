<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/auth/login');
})->name('root');

Route::get('/docs', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
