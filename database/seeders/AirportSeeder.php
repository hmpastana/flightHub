<?php

namespace Database\Seeders;

use App\Models\AirPort;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AirPort::create([
            "code" => "YUL",
            "city_code" => "YMQ",
            "name" => "Pierre Elliott Trudeau International",
            "city" => "Montreal",
            "country_code" => "CA",
            "region_code" => "QC",
            "latitude" => "45.457714",
            "longitude" => "-73.749908",
            "timezone" => "America/Montreal"
        ]);
        AirPort::create([
            "code" => "YVR",
            "city_code" => "YVR",
            "name" => "Vancouver International",
            "city" => "Vancouver",
            "country_code" => "CA",
            "region_code" => "BC",
            "latitude" => "49.194698",
            "longitude" => "-123.179192",
            "timezone" => "America/Vancouver"
        ]);
        AirPort::create([
            "code" => "YYZ",
            "city_code" => "YYZ",
            "name" => "Toronto Pearson International",
            "city" => "Toronto",
            "country_code" => "CA",
            "region_code" => "ON",
            "latitude" => "43.6777176000001",
            "longitude" => "-79.624819699999",
            "timezone" => "America/Torontor"
        ]);
        AirPort::create([
            "code" => "YWG",
            "city_code" => "YWG",
            "name" => "Winnipeg International Airpor",
            "city" => "Winnipeg",
            "country_code" => "CA",
            "region_code" => "ON",
            "latitude" => "49.904",
            "longitude" => "-97.2259",
            "timezone" => "America/Torontor"
        ]);

    }
}
