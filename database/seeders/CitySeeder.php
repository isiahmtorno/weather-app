<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    private const CITIES = [
        [
            'name' => 'Tokyo',
            'country_code' => 'JP',
        ],
        [
            'name' => 'Yokohama',
            'country_code' => 'JP',
        ],
        [
            'name' => 'Kyoto',
            'country_code' => 'JP',
        ],
        [
            'name' => 'Osaka',
            'country_code' => 'JP',
        ],
        [
            'name' => 'Sapporo',
            'country_code' => 'JP',
        ],
        [
            'name' => 'Nagoya',
            'country_code' => 'JP',
        ],
    ];

    public function run(): void
    {
        foreach (self::CITIES as $city) {
            City::factory()->create($city);
        }
    }
}
