<?php

use App\Http\Controllers\mainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainPageController::class, 'homepage'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('store');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});
