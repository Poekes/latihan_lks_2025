<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'auth'])->name('auth');
});


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminPageController::class, 'index'])->name('admin.dasboard');
    });
    Route::post('/logout', [loginController::class, 'logout'])->name('logout');
});
