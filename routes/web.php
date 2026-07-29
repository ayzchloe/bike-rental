<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/catalog', function () {
    return '<h3>Motorbike Catalog View Placeholder</h3>';
})->name('catalog.index');

Route::get('/wallet', function () {
    return '<h3>User Wallet View Placeholder</h3>';
})->name('wallet.index');
