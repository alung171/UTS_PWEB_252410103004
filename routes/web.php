<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Form Login & Logout
Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

// Halaman-Halaman Utama (Membuat request parameter username)
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');