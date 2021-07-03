<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'city_code', 'name', 'city', 'country_code', 'region_code', 'latitude', 'longitude', 'timezone'
    ];
}
