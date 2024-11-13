<?php

use App\Http\Controllers\mainPageController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/', [mainPageController::class, 'homepage']);
