<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::inertia('/', 'Home')->middleware('verified')->name('home');

require __DIR__ . '/auth.php';
