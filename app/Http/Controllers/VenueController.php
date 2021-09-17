<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Foursquare\Facade\Foursquare;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VenueController extends Controller
{
    private const DEFAULT_LIMIT = 12;

    public function __invoke(Request $request): JsonResponse
    {
        $venues = Foursquare::getVenues($request->city, $request->limit ?? self::DEFAULT_LIMIT);
        $response = $venues->getValue()['meta'];

        if ($venues->getResponseCode() === Response::HTTP_OK) {
            $response = $venues->getValue()['response']['venues'];
        }

        return response()->json($response, $venues->getResponseCode());
    }
}
