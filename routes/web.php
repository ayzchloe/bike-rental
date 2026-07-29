<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes (Unified Structure to Match Dashboard Template Links)
|--------------------------------------------------------------------------
*/

// Basic Welcome Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard Main Route
Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

// App Modules (Matching the exact view files in your directory)
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog.index');
Route::get('/booking', [MainController::class, 'booking'])->name('booking.index');
Route::get('/wallet', [MainController::class, 'wallet'])->name('wallet.index');

// Authentication Placeholders (If your template calls them)
Route::get('/login', [MainController::class, 'showLogin'])->name('login');
Route::post('/login', [MainController::class, 'login']);
Route::post('/logout', [MainController::class, 'logout'])->name('logout');
