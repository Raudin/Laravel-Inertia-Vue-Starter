<?php

use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    
    Route::get('/login',[AuthenticateController::class, 'create'])->name('login');
    Route::post('/login',[AuthenticateController::class, 'store']);
    
});
