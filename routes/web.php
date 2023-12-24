<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/movies', [MovieController::class, 'movies']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login/login', [LoginController::class,'login']);