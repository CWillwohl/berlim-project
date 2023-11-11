<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Any\DashboardController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisterScreenController;
use App\Http\Controllers\Lock\Views\IndexLockController;
use App\Http\Controllers\Auth\AuthenticateUserController;
use App\Http\Controllers\Lock\Views\CreateLockController;
use App\Http\Controllers\Lock\Views\UpdateLockController;
use App\Http\Controllers\Auth\AuthenticateScreenController;
use App\Http\Controllers\Lock\CRUD\CreateLockController as CreateFunctionLockController;
use App\Http\Controllers\Lock\CRUD\UpdateLockController as UpdateFunctionLockController;
use App\Http\Controllers\Lock\CRUD\DeleteLockController as DeleteFunctionLockController;

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

    Route::prefix('fechaduras')->group(function () {
        Route::get('/', IndexLockController::class)->name('locks.index');
        Route::get('/cadastrar', CreateLockController::class)->name('locks.create');
        Route::post('/store', CreateFunctionLockController::class)->name('locks.store');
        Route::get('/editar/{lock}', UpdateLockController::class)->name('locks.edit');
        Route::put('/editar/{lock}', UpdateFunctionLockController::class)->name('locks.update');
        Route::delete('/deletar/{lock}', DeleteFunctionLockController::class)->name('locks.destroy');
    });
});
