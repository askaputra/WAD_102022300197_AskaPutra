<?php

use App\Http\Controllers\DrinkController;

Route::get('/drinks', [DrinkController::class, 'index']);
