<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function () {
    return "darwin";
});

Route::resource('persons', PersonController::class);