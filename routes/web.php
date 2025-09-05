<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', [CVController::class, 'index'])->name('index');
Route::get('/opak', [CVController::class, 'opak'])->name('opak');

