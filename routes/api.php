<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

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
        Route::get('flights/{departureLocation}/{arrivalLocation}/{departureTime?}',[FlightController::class, 'index']);
        // Route::show('/{flightNumber}',[FlightController::class, 'show']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
