<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'list']);

Route::get('/profile', [DateController::class, 'index']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/test', [TestController::class, 'index'])->middleware('auth:sanctum');


 