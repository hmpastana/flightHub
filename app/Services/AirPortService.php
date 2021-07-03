<?php

namespace App\Services;

use App\Models\Airport;
use App\Services\Contracts\AirportServiceInterface;
use Carbon\Carbon;

class AirportService implements AirportServiceInterface
{
    public function getAirports($request)
    {
        $data = Airport::paginate(10);

        return $data;
    }

    public function showAirport($id)
    {
        return Airport::findOrFail($id);
    }

    public function storeAirport($request)
    {
        $data = Airport::create([
            'code' => $request->code,
            'name' => $request->name,
            'city_code' => $request->city_code,
            'city' => $request->city,
            'country_code' => $request->country_code,
            'region_code' => $request->region_code,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'timezone' => $request->timezone
        ]);

        return $data;
    }

    public function deleteAirport($id)
    {
        return Airport::findOrFail($id)->delete();
    }

    public function updateAirport($id, $request)
    {
        $data = Airport::findOrFail($id);
        $data->update($request->toArray());
        return $data;
    }
}
