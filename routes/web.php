<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('/home', App\Http\Controllers\HomeController::class);
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/contact', App\Http\Controllers\ContactController::class);
// Route::resource('/home', App\Http\Controllers\HomeController::class);