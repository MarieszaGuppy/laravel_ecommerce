<?php

use App\Http\Controllers\ArticleController;
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
Route::get('/contact', [mainPageController::class, 'contact'])->name('contact');
Route::get('/blog', [ArticleController::class, 'index'])->name('blog');

// PRODUCT START
Route::get('/product', [mainPageController::class, 'product'])->name('product');
Route::get('/baju', [mainPageController::class, 'baju'])->name('baju');
Route::get('/hoodie', [mainPageController::class, 'hoodie'])->name('hoodie');
Route::get('/sepatu', [mainPageController::class, 'sepatu'])->name('sepatu');
Route::get('/topi', [mainPageController::class, 'topi'])->name('topi');

// ROUTE LOGIN
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'auth']);

// LOGOUT
Route::get('/logout', [loginController::class, 'logout']);


// ROUTE REGISTER
Route::get('/register', [registerController::class, 'index'])->name('login');
Route::post('/register', [registerController::class, 'store']);