<?php

namespace App\Models;

class Flight extends Model
{
    public static function all(): array
    {
        return [
            new self([
                'id' => 'f1', 'ref' => 'TBF-2201', 'airline' => 'British Airways', 'flightNo' => 'BA 074',
                'from' => 'Lagos (LOS)', 'to' => 'London (LHR)', 'date' => '2025-12-14',
                'time' => '23:10', 'arrival' => '05:50', 'duration' => '7h 40m',
                'stops' => 'Direct', 'cabin' => 'Economy', 'passengers' => '1 adult',
                'status' => 'Confirmed', 'price' => 1150000
            ]),
            new self([
                'id' => 'f2', 'ref' => 'TBF-2202', 'airline' => 'Emirates', 'flightNo' => 'EK 786',
                'from' => 'Abuja (ABV)', 'to' => 'Dubai (DXB)', 'date' => '2025-12-28',
                'time' => '17:25', 'arrival' => '23:45', 'duration' => '9h 20m',
                'stops' => '1 stop', 'cabin' => 'Economy', 'passengers' => '2 adults',
                'status' => 'Pending', 'price' => 980000
            ]),
            new self([
                'id' => 'f3', 'ref' => 'TBF-2203', 'airline' => 'Kenya Airways', 'flightNo' => 'KQ 533',
                'from' => 'Lagos (LOS)', 'to' => 'Cape Town (CPT)', 'date' => '2026-01-05',
                'time' => '05:20', 'arrival' => '14:30', 'duration' => '13h 10m',
                'stops' => '1 stop', 'cabin' => 'Premium Economy', 'passengers' => '1 adult',
                'status' => 'Confirmed', 'price' => 875000
            ]),
            new self([
                'id' => 'f4', 'ref' => 'TBF-2195', 'airline' => 'Air France', 'flightNo' => 'AF 852',
                'from' => 'Lagos (LOS)', 'to' => 'Paris (CDG)', 'date' => '2025-10-18',
                'time' => '22:45', 'arrival' => '06:15', 'duration' => '6h 30m',
                'stops' => 'Direct', 'cabin' => 'Business', 'passengers' => '1 adult',
                'status' => 'Completed', 'price' => 890000
            ]),
        ];
    }
}

