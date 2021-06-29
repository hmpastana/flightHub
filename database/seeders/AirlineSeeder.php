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
    }
}
