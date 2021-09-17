<?php

declare(strict_types=1);

namespace App\Foursquare;

use App\Utils\HttpUtil;
use App\Utils\ResponseObject;

class FoursquareConcrete
{
    public function getVenues(?string $city, ?int $limit): ResponseObject
    {
        $params = [
            'near' => $city,
            'limit' => $limit,
            'v' => config('app.foursquare_version'),
            'client_id' => config('app.foursquare_client_id'),
            'client_secret' => config('app.foursquare_client_secret'),
        ];

        return HttpUtil::getRequest(config('app.foursquare_url'), $params);
    }
}
