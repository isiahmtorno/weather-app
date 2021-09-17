<?php

declare(strict_types=1);

namespace App\Foursquare\Facade;

use Illuminate\Support\Facades\Facade;

class Foursquare extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'foursquare';
    }
}
