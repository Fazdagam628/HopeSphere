<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/contact', App\Http\Controllers\ContactController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);