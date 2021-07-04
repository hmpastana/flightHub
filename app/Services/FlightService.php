<?php

namespace App\Services;

use App\Models\Flight;
use App\Services\Contracts\FlightServiceInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FlightService implements FlightServiceInterface
{
    public function getDepartureFlights($request)
    {

        $validate_dates = $this->calculateDates($request->departure_date);

        if($validate_dates === true){
            $data = Flight::where('departure_airport', $request->departure_location)
                ->where('arrival_airport', $request->arrival_location);

            $data = $this->filters($request, $data);

            if(($request->one_way === 'true')) {
                $data = $data->paginate(10);
            } else {
                $data = $this->getRoundTripFlights($data, $request);
            }

            return $data;

        }else{
            return ['error' => 'Your travel cannot depart after 365 days.'];
        }

    }

    public function storeFlight($request)
    {
        $data = Flight::create([
            'airline' => $request->airline,
            'number' => $request->number,
            'departure_airport' => $request->departure_airport,
            'departure_time' => $request->departure_time,
            'arrival_airport' => $request->arrival_airport,
            'arrival_time' => $request->arrival_time,
            'price' => $request->price
        ]);

        return $data;
    }

    public function getRoundTripFlights($data, $request)
    {

        $round = Flight::where('departure_airport', $request->arrival_location)
                ->where('arrival_airport', $request->departure_location);
                $round = $round->unionAll($data);
                $round = $this->filters($request, $round)
                ->paginate(10);

        return $round;
    }

    public function getFlights($numbers)
    {
        return Flight::whereIn('number', $numbers)->get();
    }

    private function filters($request, $data)
    {
        if(!is_null($request->airline)){
            $data = $data->where('airline', $request->airline);
        }

        if(!is_null($request->order_by)){
            $order_by = explode(',', $request->order_by);
            $data = $data->orderBy($order_by[0], $order_by[1]);
        }

        return $data;
    }

    private function calculateDates($departure_date)
    {
        $departure = Carbon::parse($departure_date);

        $diff_days = $departure->diffInDays(Carbon::now()->format('Y-m-d'));

        if($diff_days >= 0 & $diff_days <= 365){
            return true;
        }else{
            return false;
        }
    }

    public function showFlight($id)
    {
        return Flight::findOrFail($id);
    }

    public function updateFlight($id, $request)
    {
        $data = Flight::findOrFail($id);
        $data->update($request->toArray());
        return $data;
    }

    public function deleteFlight($id)
    {
        return Flight::findOrFail($id)->delete();
    }
}
