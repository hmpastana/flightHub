<?php

namespace Database\Seeders;

use App\Models\AirLine;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AirLine::create([
            'code' => 'AC',
            'name' => 'Air Canada',
        ]);
        AirLine::create([
            'code' => 'AF',
            'name' => 'Air France',
        ]);
        AirLine::create([
            'code' => 'AL',
            'name' => 'American Airlines',
        ]);
        AirLine::create([
            'code' => 'EK',
            'name' => 'Emirates',
        ]);
    }
}
