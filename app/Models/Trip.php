<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_date', 'departure_location', 'arrival_location'
    ];

    // Relationship
    public function flight()
    {
        return $this->belongsToMany('App\Models\Flight','trips_flights', 'trip_id', 'flight_id');
    }
}
