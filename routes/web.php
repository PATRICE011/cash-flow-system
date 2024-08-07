<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\donateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Admin Login Routes
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AdminController::class, 'login'])->name('postLogin');

// Admin Logout Route
Route::post('admin/logout', [AdminController::class, 'logout'])->name('logout');

// Routes that require authentication
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [homeController::class, 'index'])->name('index');
    // donate
    Route::get('/donations', [donateController::class, 'index'])->name('showDonate');
    Route::post('/donations', [donateController::class, 'store'])->name('postDonate');

});





