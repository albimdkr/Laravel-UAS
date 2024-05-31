<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('Welcome', ["title" => "Welcome"]);
});

Route::resource('/signin', AuthController::class);
Route::resource('/signup', AuthController::class);