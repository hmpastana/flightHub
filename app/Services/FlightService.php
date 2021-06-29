<?php

namespace App\Services;

use App\Models\Flight;
use App\Services\Contracts\FlightServiceInterface;

class FlightService implements FlightServiceInterface
{
    public function getFlights($request)
    {
        $data = Flight::where('departure_airport', $request->departureLocation)
            ->where('arrival_airport', $request->arrivalLocation)
            ->paginate(10);

        return $data;
    }
}
