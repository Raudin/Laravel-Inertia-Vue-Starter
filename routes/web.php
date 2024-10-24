<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::inertia('/', 'Home')->name('home');

require __DIR__ . '/auth.php';
