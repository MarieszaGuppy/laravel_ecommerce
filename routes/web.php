<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\favoriteController;
use App\Http\Controllers\mainPageController;
use App\Http\Controllers\Authentikasi\loginController;
use App\Http\Controllers\Authentikasi\registerController;

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// ROUTE WHISLIST / FAVORITE
Route::get('/favorite', [favoriteController::class, 'index'])->name('favorite');

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
Route::get('/product/{product:slug}', [produkController::class, 'detail'])->name('detail');

// ROUTE ARTICLE
Route::get('/blog', [ArticleController::class, 'index'])->name('blog');
Route::get('/blog/{article:slug}', [ArticleController::class, 'show']);

// ROUTE LOGIN
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'auth']);

// LOGOUT
Route::get('/logout', [loginController::class, 'logout']);


// ROUTE REGISTER
Route::get('/register', [registerController::class, 'index'])->name('login');
Route::post('/register', [registerController::class, 'store']);

// ROUTE PROFILE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
});
