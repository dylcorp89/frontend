<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimulateController;
use Illuminate\Support\Facades\Route;

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
 // Routes principales
 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/login', [HomeController::class, 'login'])->name('login');
 Route::post('/login', [HomeController::class, 'login_post'])->name('login');
 Route::get('/simulateur', [SimulateController::class, 'index'])->name('simulate');


