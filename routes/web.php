<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//http://localhost/laravel11-app/public/
//http://laravel11-app.local/about
Route::get('/', [HomeController::class, 'index']);

//http://localhost/laravel11-app/public/about
//http://laravel11-app.local/about
Route::get('/about', [HomeController::class, 'about']);
