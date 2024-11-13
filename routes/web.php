<?php

use App\Http\Controllers\mainPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [mainPageController::class, 'homepage']);

