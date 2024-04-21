<?php

use App\Http\Middleware\EnsureTokenIsValidMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

