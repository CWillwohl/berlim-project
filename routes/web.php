<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Any\DashboardController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisterScreenController;
use App\Http\Controllers\Auth\AuthenticateUserController;
use App\Http\Controllers\Auth\AuthenticateScreenController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login-form');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', RegisterScreenController::class)->name('register-form');
    Route::post('/register', RegisterUserController::class)->name('register-user');

    Route::get('/login', AuthenticateScreenController::class)->name('login-form');
    Route::post('/login', AuthenticateUserController::class)->name('login-user');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::post('/logout', LogoutController::class)->name('logout');
});
