<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/qr', [HomeController::class, 'qr'])->name('qr');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
