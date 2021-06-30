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

        Flight::create([
            "airline" => "AL",
            "number" => "978",
            "departure_airport" => "YYZ",
            "departure_time" => "14:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "16:11",
            "price" => "200.63"
        ]);

        Flight::create([
            "airline" => "AL",
            "number" => "560",
            "departure_airport" => "YYZ",
            "departure_time" => "17:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "19:11",
            "price" => "140.63"
        ]);

        Flight::create([
            "airline" => "EK",
            "number" => "701",
            "departure_airport" => "YVR",
            "departure_time" => "08:30",
            "arrival_airport" => "YYZ",
            "arrival_time" => "12:11",
            "price" => "220.63"
        ]);

        Flight::create([
            "airline" => "EK",
            "number" => "751",
            "departure_airport" => "YYZ",
            "departure_time" => "17:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "21:11",
            "price" => "210.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "851",
            "departure_airport" => "YWG",
            "departure_time" => "19:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "21:11",
            "price" => "278.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "871",
            "departure_airport" => "YUL",
            "departure_time" => "09:30",
            "arrival_airport" => "YWG",
            "arrival_time" => "12:11",
            "price" => "228.63"
        ]);
    }
}
