<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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

// Listings
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
Route::get('/listings/manager', [ListingController::class, 'manager'])->middleware('auth');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Users
Route::get('/users/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/users/login', [UserController::class, 'login'])->name('login')->middleware('guest');;
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
