<?php

declare(strict_types=1);

namespace App\Utils;

use App\Utils\ResponseObject;
use Illuminate\Support\Facades\Http;

class HttpUtil
{
    public static function getRequest(string $url, array $params): ResponseObject
    {
        $response = Http::get($url, $params);

        return new ResponseObject($response->json(), $response->status());
    }
}
