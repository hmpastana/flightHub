<?php
namespace App\Services\Contracts;

interface FlightServiceInterface
{
    public function getDepartureFlights($request);
    public function getRoundTripFlights($data, $request);
    public function getFlights($number);
    public function storeFlight($request);
    public function deleteFlight($id);
    public function showFlight($id);
    public function updateFlight($id, $request);

}
