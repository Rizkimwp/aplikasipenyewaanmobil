<?php

use App\Http\Controllers\RentalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// register
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Car
Route::get('/cars', [CarController::class, 'index'])->name('car.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('car.create');
Route::post('/cars', [CarController::class, 'store'])->name('car.store');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('car.update');
Route::get('/cars/search', [CarController::class, 'search'])->name('car.search');

// Rental
Route::get('/rentals', [RentalController::class, 'index'])->name('rental.index');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rental.create');
Route::post('/rentals', [RentalController::class, 'store'])->name('rental.store');


