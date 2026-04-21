<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');




Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware(['auth'])->group(function () {


    Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');

    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');

    Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('offers.show');

    Route::get('/offers/{offer}/edit', [OfferController::class, 'edit'])->name('offers.edit');
    Route::put('/offers/{offer}', [OfferController::class, 'update'])->name('offers.update');
    Route::delete('/offers/{offer}', [OfferController::class, 'destroy'])->name('offers.destroy');
});


Route::get('/proposals/create', [ProposalController::class, 'create'])->name('proposals.create');
Route::post('/proposals', [ProposalController::class, 'store'])->name('proposals.store');
Route::get('/proposals/list', [ProposalController::class, 'index'])->name('proposals.index');

Route::post('/proposals/{proposal}/accept', [ProposalController::class, 'accept'])->name('proposals.accept');
Route::get('/mes-livraisons', [ProposalController::class, 'myDeliveries'])->name('livreur.deliveries');
Route::get('/my-orders', [ProposalController::class, 'myOrders'])->name('proposals.my_orders');
Route::patch('/proposals/{proposal}/confirm', [ProposalController::class, 'confirmDelivery'])->name('proposals.confirm');
Route::patch('/proposals/{proposal}/start', [ProposalController::class, 'startDelivery'])->name('proposals.start');

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


    Route::get('/client/{id}/reviews', [ProfileController::class, 'clientReviews'])->name('client.reviews');
});


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');





Route::middleware(['auth'])->group(function () {
    Route::get('/livreurs', [AdminController::class, 'livreurs'])->name('admin.index');

    Route::get('/clients', [AdminController::class, 'clients'])->name('admin.client');
});

