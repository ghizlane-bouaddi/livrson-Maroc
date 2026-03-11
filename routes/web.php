<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
 });

// Route::get('/login', [AuthController::class,'loginView']);
// Route::post('/login', [AuthController::class,'login']);
// Route::get('/register', [AuthController::class,'registerView']);
// Route::post('/register', [AuthController::class,'register']);
// Route::post('/logout', [AuthController::class,'logout']);
