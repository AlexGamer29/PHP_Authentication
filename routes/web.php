<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\groupController;
use App\Http\Controllers\MangController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getProductType']);
Route::get('/detail/{id}', [PageController::class, 'getProductDetail']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);


Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');

// Register
Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register', [UserController::class, 'Register']);

// Login
Route::get('/login', function () {
    return view('users.login');
});
Route::post('/login', [UserController::class, 'Login']);

// Logout
Route::get('/logout', [UserController::class, 'Logout']);
