<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\OffreController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // هاد السطر هو اللي كيخلي لارافيل يعرفها بهاد السمية




    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);


// 3. رابط الخروج (Logout) - خاصك تكون Login باش تخرج
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
