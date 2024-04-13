<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "Test route";
});

Route::get('/login', [AdminAuthController::class, 'login'])->name('login');

Route::middleware(['auth', 'user.type:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
