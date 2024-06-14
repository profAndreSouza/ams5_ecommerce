<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [UserController::class, 'showFormRegister']);
Route::post('/register', [UserController::class, 'register'])->name('register');


Route::get('/products', [ProductController::class, 'listProducts'])->name('listProducts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
});