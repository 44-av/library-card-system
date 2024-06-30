<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::get('/', [UserProfileController::class, 'index']);
Route::post('/', [UserProfileController::class, 'loginUser']);
Route::get('/register', [UserProfileController::class, 'toRegister']);
Route::post('/register', [UserProfileController::class, 'registerData']);

Route::get('/view', [UserProfileController::class, 'view']);
Route::get('/view', [UserProfileController::class, 'view'])->middleware();
Route::post('/view', [UserProfileController::class, 'logout'])->name('logout');
