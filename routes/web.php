<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

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

Route::get('/', AboutController::class)->name('index');
Route::get('/profile/{profile_name}', ProfileController::class)->name('profile');
Route::get('/to_homepage', HomeController::class)->name('to_homepage');

Route::group(['namespace' => 'App\Http\Controllers\Entity'], function() {
  Route::get('/entities', IndexController::class)->name('entity.index');
  Route::get('/entities/create', CreateController::class)->name('entity.create');
  Route::post('/entities', StoreController::class)->name('entity.store');
});



Auth::routes();

