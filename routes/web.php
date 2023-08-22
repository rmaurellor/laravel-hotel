<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HabitacionesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/habitaciones/show/{id}', [App\Http\Controllers\HabitacionesController::class, 'show']);
Route::get('/hotel/list', [App\Http\Controllers\HotelController::class, 'list']);

//Route::get('/user/', [UserController::class, 'show']);