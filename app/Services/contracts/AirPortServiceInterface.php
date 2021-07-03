<?php
namespace App\Services\Contracts;

interface AirportServiceInterface
{
    public function getAirports($request);
    public function showAirport($id);
    public function storeAirport($request);
    public function deleteAirport($id);
    public function updateAirport($id, $request);
}
