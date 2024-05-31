<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Default Route
Route::get('/', function(){
    return view('welcome', ['title' => 'Welcome']);
});

// Routing to other page
Route::get('/signin', [AuthController::class, 'signin']);
Route::get('/signup', [AuthController::class, 'signup']);