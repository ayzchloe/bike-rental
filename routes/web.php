<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog.index');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet.index');

Route::get('/booking', function () {
    return view('booking');
})->name('booking.index');
