<?php

namespace App\Services;

use App\Models\Airline;
use App\Services\Contracts\AirlineServiceInterface;
use Carbon\Carbon;

class AirlineService implements AirlineServiceInterface
{
    public function getAirlines($request)
    {
        $data = Airline::paginate(10);

        return $data;
    }

    public function showAirline($id)
    {
        return Airline::findOrFail($id);
    }

    public function storeAirline($request)
    {
        $data = Airline::create([
            'code' => $request->code,
            'name' => $request->name
        ]);
        return $data;
    }

    public function deleteAirline($id)
    {
        return Airline::findOrFail($id)->delete();
    }

    public function updateAirline($id, $request)
    {
        $data = Airline::findOrFail($id);
        $data->update($request->toArray());

        return $data;
    }
}
