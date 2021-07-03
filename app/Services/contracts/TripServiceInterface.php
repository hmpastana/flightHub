<?php
namespace App\Services\Contracts;

interface TripServiceInterface
{
    public function getTrips($request);
    public function showTrip($id);
    public function storeTrip($request, $flights);
    public function deleteTrip($id);

}
