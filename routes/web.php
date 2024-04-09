<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SolicitorController;

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