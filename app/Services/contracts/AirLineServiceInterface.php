<?php
namespace App\Services\Contracts;

interface AirlineServiceInterface
{
    public function getAirlines($request);
    public function showAirline($id);
    public function storeAirline($request);
    public function deleteAirline($id);
    public function updateAirline($id, $request);

}
