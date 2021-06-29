<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::create([
            "airline" => "AC",
            "number" => "301",
            "departure_airport" => "YUL",
            "departure_time" => "07:35",
            "arrival_airport" => "YVR",
            "arrival_time" => "10:05",
            "price" => "273.23"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "302",
            "departure_airport" => "YVR",
            "departure_time" => "11:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "19:11",
            "price" => "220.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "303",
            "departure_airport" => "YUL",
            "departure_time" => "09:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "12:11",
            "price" => "220.63"
        ]);

    }
}
