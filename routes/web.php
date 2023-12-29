<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/movies', [MovieController::class, 'movies']);
Route::get('/tv-shows', [MovieController::class, 'tvShows']);
Route::get('/search', [MovieController::class, 'search']);
Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login/login', [LoginController::class,'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function(){
//     return view('dashboard.index');
// })->middleware('auth');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);

