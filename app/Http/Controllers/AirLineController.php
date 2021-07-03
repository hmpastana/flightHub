<?php

namespace App\Http\Controllers;

use App\Services\Contracts\AirlineServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirlineController extends Controller
{
    public function __construct(AirlineServiceInterface $airlineService)
    {
        $this->airlineService = $airlineService;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->airlineService->getAirlines($request);

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
        $trip = $this->airlineService->storeAirline($request);

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
        $data = $this->airlineService->showAirline($id);
        return response()->json($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->airlineService->updateAirline($id, $request);
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
        $data = $this->airlineService->deleteAirline($id);
        return response()->json($data);
    }
}
