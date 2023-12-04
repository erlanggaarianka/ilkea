<?php

use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [GuestController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/furniture/{id}', [HomeController::class, 'showFurniture'])->name('furniture.show');

Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

// Move the create and store routes above the specific furniture/{id} route
Route::get('/create', [HomeController::class, 'showFurnitureCreate'])->name('furniture.create');
Route::post('/store', [FurnitureController::class, 'store'])->name('furniture.store');

Route::delete('/furniture/{id}', [FurnitureController::class, 'destroy'])->name('furniture.destroy');
