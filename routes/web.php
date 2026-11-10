<?php

use App\Http\Controllers\PhotoClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhotoClientController::class, 'login'])->name('login');
Route::post('/login-submit', [PhotoClientController::class, 'loginSubmit'])->name('login.submit');
Route::get('/dashboard', [PhotoClientController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PhotoClientController::class, 'photos'])->name('pengelolaan');
Route::get('/profile', [PhotoClientController::class, 'profile'])->name('profile');