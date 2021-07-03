<?php

namespace App\Http\Controllers;

use App\Services\Contracts\FlightServiceInterface;
use App\Services\Contracts\TripServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function __construct(TripServiceInterface $tripService, FlightServiceInterface $flightService)
    {
        $this->tripService = $tripService;
        $this->flightService = $flightService;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->tripService->getTrips($request);

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flights = $this->flightService->getFlights($request->number);
        $trip = $this->tripService->storeTrip($request, $flights);

        return response()->json($trip);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->tripService->showTrip($id);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->tripService->deleteTrip($id);
        return response()->json($data);
    }
}
