<?php
namespace App\Services\Contracts;

interface TripServiceInterface
{
    public function getTrips($request);
    public function showTrip($id);
    public function storeTrip($request, $flights);
    public function deleteTrip($id);
    public function assignFlightToTrip($trip, $flight_id);
    public function detachFlightToTrip($trip, $flight_id);

}
