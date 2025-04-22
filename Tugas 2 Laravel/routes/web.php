<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\AuthController;


Route::get('/drinks', [DrinkController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

