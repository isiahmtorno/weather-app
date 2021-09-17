<?php

declare(strict_types=1);

namespace App\Foursquare;

use App\Foursquare\FoursquareConcrete;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FoursquareProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->app->singleton('foursquare', function () {
            return new FoursquareConcrete();
        });
    }

    public function provides(): array
    {
        return ['foursquare'];
    }
}
