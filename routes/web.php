<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ReviewController;


Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
Route::view('/reset-password', 'auth.reset-password')->name('password.reset');







Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-detail', [ProductController::class, 'show'])->name('products');
Route::get('/store-detail', [StoreController::class, 'show'])->name('stores');
Route::get('/reviews', [ReviewController::class, 'show'])->name('reviews');
