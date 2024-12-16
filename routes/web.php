<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/login', [GuestController::class, 'login'])->name('login');
Route::get('/register', [GuestController::class, 'register'])->name('register');


Route::post('/loginuser',[AuthController::class, 'postLogin']);
Route::post('/registeruser', [AuthController::class, 'postRegister']);

Route::middleware(['AdminMiddleware'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    
});