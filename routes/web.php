<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Default Route
Route::get('/', function(){
    return view('Welcome', ["title" => "Welcome"]);
});

// Routing to other page
Route::resource('/signin', AuthController::class);
Route::resource('/signup', AuthController::class);