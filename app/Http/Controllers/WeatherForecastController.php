<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\OpenWeather\Facade\OpenWeather;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WeatherForecastController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $weather_forecast = OpenWeather::getWeatherForecast($request->city);

        return response()->json($weather_forecast->getValue(), $weather_forecast->getResponseCode());
    }
}
