<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/login', [AuthController::class, 'loginPage'])->name('get.login');
Route::post('/loginAction', [AuthController::class, 'login'])->name('post.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
