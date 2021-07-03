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
            "number" => "391",
            "departure_airport" => "YUL",
            "departure_time" => "07:35",
            "arrival_airport" => "YYZ",
            "arrival_time" => "10:05",
            "price" => "273.23"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "371",
            "departure_airport" => "YUL",
            "departure_time" => "09:30",
            "arrival_airport" => "YWG",
            "arrival_time" => "12:11",
            "price" => "228.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "401",
            "departure_airport" => "YUL",
            "departure_time" => "15:35",
            "arrival_airport" => "YVR",
            "arrival_time" => "19:05",
            "price" => "273.23"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "491",
            "departure_airport" => "YUL",
            "departure_time" => "17:35",
            "arrival_airport" => "YYZ",
            "arrival_time" => "21:05",
            "price" => "263.23"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "471",
            "departure_airport" => "YUL",
            "departure_time" => "89:30",
            "arrival_airport" => "YWG",
            "arrival_time" => "11:11",
            "price" => "228.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "578",
            "departure_airport" => "YYZ",
            "departure_time" => "14:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "16:11",
            "price" => "200.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "521",
            "departure_airport" => "YYZ",
            "departure_time" => "05:35",
            "arrival_airport" => "YWG",
            "arrival_time" => "08:05",
            "price" => "273.23"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "560",
            "departure_airport" => "YYZ",
            "departure_time" => "17:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "19:11",
            "price" => "140.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "678",
            "departure_airport" => "YYZ",
            "departure_time" => "14:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "16:11",
            "price" => "200.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "653",
            "departure_airport" => "YYZ",
            "departure_time" => "05:35",
            "arrival_airport" => "YWG",
            "arrival_time" => "08:05",
            "price" => "273.23"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "660",
            "departure_airport" => "YYZ",
            "departure_time" => "17:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "19:11",
            "price" => "140.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "702",
            "departure_airport" => "YVR",
            "departure_time" => "11:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "19:11",
            "price" => "229.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "701",
            "departure_airport" => "YVR",
            "departure_time" => "08:30",
            "arrival_airport" => "YYZ",
            "arrival_time" => "12:11",
            "price" => "220.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "751",
            "departure_airport" => "YVR",
            "departure_time" => "17:30",
            "arrival_airport" => "YWG",
            "arrival_time" => "21:11",
            "price" => "210.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "802",
            "departure_airport" => "YVR",
            "departure_time" => "11:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "19:11",
            "price" => "229.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "801",
            "departure_airport" => "YVR",
            "departure_time" => "08:30",
            "arrival_airport" => "YYZ",
            "arrival_time" => "12:11",
            "price" => "220.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "851",
            "departure_airport" => "YVR",
            "departure_time" => "17:30",
            "arrival_airport" => "YWG",
            "arrival_time" => "21:11",
            "price" => "210.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "951",
            "departure_airport" => "YWG",
            "departure_time" => "19:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "21:11",
            "price" => "278.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "931",
            "departure_airport" => "YWG",
            "departure_time" => "18:30",
            "arrival_airport" => "YYZ",
            "arrival_time" => "20:11",
            "price" => "228.63"
        ]);

        Flight::create([
            "airline" => "AC",
            "number" => "991",
            "departure_airport" => "YWG",
            "departure_time" => "14:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "27:11",
            "price" => "218.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "251",
            "departure_airport" => "YWG",
            "departure_time" => "19:30",
            "arrival_airport" => "YUL",
            "arrival_time" => "21:11",
            "price" => "278.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "231",
            "departure_airport" => "YWG",
            "departure_time" => "18:30",
            "arrival_airport" => "YYZ",
            "arrival_time" => "20:11",
            "price" => "228.63"
        ]);

        Flight::create([
            "airline" => "WS",
            "number" => "291",
            "departure_airport" => "YWG",
            "departure_time" => "14:30",
            "arrival_airport" => "YVR",
            "arrival_time" => "27:11",
            "price" => "218.63"
        ]);

    }
}
