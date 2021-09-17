<?php

declare(strict_types=1);

namespace App;

use App\Models\City;
use Illuminate\Support\Facades\Cache;

class JsVars
{
    private const CACHE_KEY = 'js-vars';
    private const DEFAULT_CACHE_TIMEOUT_MIN = 20;

    public static function getSettings(): string
    {
        $settings = self::getCachedSettings();

        $encoded = json_encode($settings);
        $encoded = addslashes($encoded);

        return $encoded;
    }

    private static function getCachedSettings(): array
    {
        return Cache::remember(
            self::DEFAULT_CACHE_TIMEOUT_MIN,
            self::CACHE_KEY,
            fn () => [
                'cities' => City::all(),
            ],
        );
    }

    public static function clearJSVars(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
