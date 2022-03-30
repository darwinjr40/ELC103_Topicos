<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [HomeController::class, 'index']);

Route::resource('persons', PersonController::class);