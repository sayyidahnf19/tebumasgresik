<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products Page Route
Route::get('/produk', function() {
    return view('products');
})->name('products');

// About Page Route
Route::get('/tentang', function() {
    return view('about');
})->name('about');

// Contact Page Route
Route::get('/kontak', function() {
    return view('contact');
})->name('contact');
