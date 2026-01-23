<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/classifieds', [PageController::class, 'classifieds']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/signin', [PageController::class, 'signin']);
Route::get('/signup', [PageController::class, 'signup']);

Route::get('/services-data', [PageController::class, 'getServicesData']);
Route::get('/fixora-landing', [LandingPageController::class, 'index']);
