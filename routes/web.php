<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SolicitorController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/practice-areas', [HomeController::class, 'practice'])->name('areas');
Route::get('/practice-areas/{area}', [HomeController::class, 'practice_detail'])->name('areas_detail');

// Solicitor
Route::get('/solicitors', [SolicitorController::class, 'index'])->name('solicitors');
Route::get('/find-solicitor', [SolicitorController::class, 'find'])->name('find-solicitor');
Route::get('/view-solicitor', [SolicitorController::class, 'view'])->name('view-solicitor');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');