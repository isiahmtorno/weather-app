<?php

declare(strict_types=1);

use App\Http\Controllers\VenueController;
use App\Http\Controllers\WeatherForecastController;
use Illuminate\Support\Facades\Route;

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

Route::get('/weather-forecast', WeatherForecastController::class);
Route::get('/venues', VenueController::class);
