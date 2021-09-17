<?php

declare(strict_types=1);

namespace App\OpenWeather;

use App\OpenWeather\OpenWeatherConcrete;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OpenWeatherProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->app->singleton('openweather', function () {
            return new OpenWeatherConcrete();
        });
    }

    public function provides(): array
    {
        return ['openweather'];
    }
}
