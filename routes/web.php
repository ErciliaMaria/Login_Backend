<?php

use Illuminate\Support\Facades\Route;
use App\Repos\UserRepo;
use App\Contracts\RepoInterface;
use Illuminate\Support\Facades\App;


Route::get('/', function () {
    return view('welcome');
});

