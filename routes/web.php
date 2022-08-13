<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//  User Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
    });
});

//  Admin Routes
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    });
});
