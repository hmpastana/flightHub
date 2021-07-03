<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TripController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::prefix('trip')->group(function () {
        Route::get('/{departure_location}/{arrival_location}/{departure_date}/',[FlightController::class, 'index']);
        Route::post('/',[TripController::class, 'store']);
        Route::get('/{id}',[TripController::class, 'show']);
        Route::delete('/{id}',[TripController::class, 'destroy']);
    });

    Route::prefix('flight')->group(function () {
        Route::post('/',[FlightController::class, 'store']);
        Route::get('/',[FlightController::class, 'index']);
        Route::get('/{id}',[FlightController::class, 'show']);
        Route::put('/{id}',[FlightController::class, 'update']);
        Route::delete('/{id}',[FlightController::class, 'destroy']);
    });

    Route::prefix('airline')->group(function () {
        Route::post('/',[AirlineController::class, 'store']);
        Route::get('/',[AirlineController::class, 'index']);
        Route::get('/{id}',[AirlineController::class, 'show']);
        Route::put('/{id}',[AirlineController::class, 'update']);
        Route::delete('/{id}',[AirlineController::class, 'destroy']);
    });

    Route::prefix('airport')->group(function () {
        Route::post('/',[AirportController::class, 'store']);
        Route::get('/',[AirportController::class, 'index']);
        Route::get('/{id}',[AirportController::class, 'show']);
        Route::put('/{id}',[AirportController::class, 'update']);
        Route::delete('/{id}',[AirportController::class, 'destroy']);
    });

});

