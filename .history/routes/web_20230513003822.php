<?php

use App\Http\Controllers\businessController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*

Route::get('/home', [businessController::class,'index']);

Route::get('/about', [businessController::class,'about']);

Route::get('/services', [businessController::class,'services']);

Route::get('/contact', [businessController::class,'contact']);

Route::post('/contact', [businessController::class,'contactForm']);
