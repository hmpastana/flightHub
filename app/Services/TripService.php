<?php

namespace App\Services;

use App\Models\Trip;
use App\Services\Contracts\TripServiceInterface;
use Carbon\Carbon;

class TripService implements TripServiceInterface
{
    public function getTrips($request)
    {
        $data = Trip::with('flight')->whereHas('flight')->paginate(10);

        return $data;
    }

    public function showTrip($id)
    {
        return Trip::with('flight')->findOrFail($id);
    }

    public function storeTrip($request, $flights)
    {
        $data = Trip::create([
            'departure_date' => $request->departure_date,
            'departure_location' => $request->departure_location,
            'arrival_location' => $request->arrival_location
        ]);

        foreach($flights as $ind => $flight){
            if($data) $this->assignFlightToTrip($data, $flight->id);
        }

        return $data;
    }

    public function assignFlightToTrip($trip, $flight_id)
    {
        $trip = $trip->flight()->attach($flight_id);

        return $trip;
    }

    public function detachFlightToTrip($trip, $flight_id)
    {
        $trip = $trip->flight()->attach($flight_id);

        return $trip;
    }

    public function deleteTrip($id)
    {
        return Trip::findOrFail($id)->delete();
    }

}
