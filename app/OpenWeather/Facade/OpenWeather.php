<?php

declare(strict_types=1);

namespace App\OpenWeather\Facade;

use Illuminate\Support\Facades\Facade;

class OpenWeather extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'openweather';
    }
}
