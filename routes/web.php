<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Authentikasi\loginController;
use App\Http\Controllers\Authentikasi\registerController;
use App\Http\Controllers\favoriteController;
use App\Http\Controllers\mainPageController;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;

Route::get('/check', function () {
    return view('checkout');
});

// ROUTE WHISLIST / FAVORITE
Route::get('/favorite', [favoriteController::class, 'index']);

// ROUTE MAIN PAGE
Route::get('/', [mainPageController::class, 'homepage'])->name('home');
Route::get('/about', [mainPageController::class, 'about'])->name('about');
Route::get('/contact', [mainPageController::class, 'contact'])->name('contact');

// ROUTE PRODUCT
Route::get('/product', [produkController::class, 'product'])->name('product');
Route::get('/product/baju', [produkController::class, 'baju'])->name('baju');
Route::get('/product/hoodie', [produkController::class, 'hoodie'])->name('hoodie');
Route::get('/product/sepatu', [produkController::class, 'sepatu'])->name('sepatu');
Route::get('/product/topi', [produkController::class, 'topi'])->name('topi');

// ROUTE ARTICLE
Route::get('/blog', [ArticleController::class, 'index'])->name('blog');
Route::get('/blog/{article:slug}', [ArticleController::class, 'view']);

// ROUTE LOGIN
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'auth']);

// LOGOUT
Route::get('/logout', [loginController::class, 'logout']);


// ROUTE REGISTER
Route::get('/register', [registerController::class, 'index'])->name('login');
Route::post('/register', [registerController::class, 'store']);