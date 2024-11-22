<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/login', [GuestController::class, 'login'])->name('login');
Route::get('/register', [GuestController::class, 'register'])->name('register');

Route::post('/postregister', [AuthController::class, 'postRegister']);
Route::post('postlogin', [AuthController::class, 'postLogin']);


Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});


