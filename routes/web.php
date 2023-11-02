<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AboutController::class, 'index'])->name('index');
Route::get('/profile/{profile_name}', App\Http\Controllers\ProfileController::class)->name('profile');
Route::get('/to_homepage', App\Http\Controllers\HomeController::class)->name('to_homepage');

Auth::routes();

