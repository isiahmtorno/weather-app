<?php

declare(strict_types=1);

namespace App\OpenWeather;

use App\Utils\HttpUtil;
use App\Utils\ResponseObject;

class OpenWeatherConcrete
{
    private const DEFAULT_TEMPARATURE = 'metric';

    public function getWeatherForecast(?string $city): ResponseObject
    {
        $params = [
            'q' => $city,
            'units' => self::DEFAULT_TEMPARATURE,
            'appid' => config('app.open_weather_api_key'),
        ];

        return HttpUtil::getRequest(config('app.open_weather_url'), $params);
    }
}
