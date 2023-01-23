<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelLogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    
        Route::get('/', function () {
            return view('welcome');
        }); 
    Route::get('/travel', [TravelLogController::class, 'index'])->name('travel.index');
    Route::get('/travel/create', [TravelLogController::class, 'create'])->name('travel.create');
    Route::get('/travel/edit/{id}', [TravelLogController::class, 'edit'])->name('travel.edit');
    Route::get('/travel/{id}', [TravelLogController::class, 'show'])->name('travel.show');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
});

Route::post('/travel/create', [TravelLogController::class, 'store'])->name('travel.store');
Route::put('/travel/edit/{id}', [TravelLogController::class, 'update'])->name('travel.update');
Route::put('/travel/delete/{id}', [TravelLogController::class, 'destroy'])->name('travel.destroy');

Route::post('/login','App\Http\Controllers\LoginController@login');
Route::post('/register','App\Http\Controllers\RegisterController@store');
Route::post('/logout','App\Http\Controllers\LoginController@logout');