<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::view('/home', 'home');
Route::view('/contact', 'contact');

Route::get('/products', [ProductController::class, 'list']);
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);