<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes (single MainController handles everything)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog.index');
Route::get('/booking', [MainController::class, 'booking'])->name('booking.index');
Route::get('/wallet', [MainController::class, 'wallet'])->name('wallet.index');
Route::get('/settings', [MainController::class, 'settings'])->name('settings.index');

Route::post('/user/switch-mode', [MainController::class, 'switchMode'])->name('user.switch-mode');
Route::post('/rides/start/{bike}', [MainController::class, 'bookRide'])->name('rides.start');
Route::post('/bikes/{bike}/favorite', [MainController::class, 'toggleFavorite'])->name('bikes.favorite');
Route::post('/api/rides/{ride}/extend', [MainController::class, 'extendRide'])->name('rides.extend');
Route::post('/api/rides/{ride}/end', [MainController::class, 'endRide'])->name('rides.end');
Route::post('/offers/claim', [MainController::class, 'claimOffer'])->name('offers.claim');
Route::post('/settings/profile', [MainController::class, 'updateProfile'])->name('settings.profile');
Route::post('/settings/password', [MainController::class, 'updatePassword'])->name('settings.password');

Route::get('/login', [MainController::class, 'showLogin'])->name('login');
Route::post('/login', [MainController::class, 'login']);
Route::post('/logout', [MainController::class, 'logout'])->name('logout');
Route::get('/register', [MainController::class, 'showRegister'])->name('register');
Route::post('/register', [MainController::class, 'register']);
