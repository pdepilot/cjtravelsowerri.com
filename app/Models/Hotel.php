<?php

namespace App\Models;

class Hotel extends Model
{
    public static function all(): array
    {
        return [
            new self([
                'id' => 'h1', 'ref' => 'TBH-1180', 'property' => 'The Wheatbaker', 'location' => 'Ikoyi, Lagos',
                'checkin' => '2025-12-14', 'checkout' => '2025-12-17', 'nights' => 3,
                'guests' => '2 guests', 'rooms' => '1 room', 'roomType' => 'Deluxe Room',
                'status' => 'Confirmed', 'price' => 555000
            ]),
            new self([
                'id' => 'h2', 'ref' => 'TBH-1181', 'property' => 'Atlantis The Palm', 'location' => 'Palm Jumeirah, Dubai',
                'checkin' => '2025-12-28', 'checkout' => '2026-01-02', 'nights' => 5,
                'guests' => '2 guests', 'rooms' => '1 room', 'roomType' => 'Deluxe Room',
                'status' => 'Pending', 'price' => 1450000
            ]),
            new self([
                'id' => 'h3', 'ref' => 'TBH-1175', 'property' => 'The Hoxton Shoreditch', 'location' => 'Shoreditch, London',
                'checkin' => '2025-11-20', 'checkout' => '2025-11-23', 'nights' => 3,
                'guests' => '1 guest', 'rooms' => '1 room', 'roomType' => 'Standard Room',
                'status' => 'Completed', 'price' => 525000
            ]),
        ];
    }
}

