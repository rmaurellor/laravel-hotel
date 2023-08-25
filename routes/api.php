<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\HabitacionesController;
use App\Http\Resources\Hotel as HotelResource;
use App\Models\Hotel;
use App\Http\Resources\Habitaciones as HabitacionesResource;
use App\Models\Habitaciones;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('hotel')->group(function () {
    Route::get('/',[ HotelController::class, 'get']);
});

Route::prefix('habitacion')->group(function () {
    Route::get('/',[ HabitacionesController::class, 'get']);
});

Route::get('/hoteles', function () {
    return HotelResource::collection(Hotel::all());
});

Route::get('/habitaciones', function () {
    return HabitacionesResource::collection(Habitaciones::all());
});

