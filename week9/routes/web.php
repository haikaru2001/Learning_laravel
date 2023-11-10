<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/register', [PageController::class, 'register']);

Route::get('/mahasiswa', [PageController::class, 'mahasiswa']);

Route::get('/dosen', [PageController::class, 'dosen']);

Route::get('/matkul', [PageController::class, 'matkul']);

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/profile', [PageController::class, 'profile']);


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);