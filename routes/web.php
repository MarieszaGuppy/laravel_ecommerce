<?php

use App\Http\Controllers\Authentikasi\loginController;
use App\Http\Controllers\Authentikasi\registerController;
use App\Http\Controllers\mainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/check', function () {
    return view('checkout');
});

// ROUTE MAIN PAGE
Route::get('/', [mainPageController::class, 'homepage'])->name('home');
Route::get('/about', [mainPageController::class, 'about'])->name('about');
Route::get('/product', [mainPageController::class, 'product'])->name('product');
Route::get('/contact', [mainPageController::class, 'contact'])->name('contact');
Route::get('/blog', [mainPageController::class, 'blog'])->name('blog');

// ROUTE LOGIN
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'auth']);

// LOGOUT
Route::get('/logout', [loginController::class, 'logout']);


// ROUTE REGISTER
Route::get('/register', [registerController::class, 'index'])->name('login');
Route::post('/register', [registerController::class, 'store']);