<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'list']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);