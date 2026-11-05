<?php

namespace App\Models;

class Transaction extends Model
{
    public static function all(): array
    {
        return [
            new self([
                'id' => 'p1', 'ref' => 'PAY-9001', 'related' => 'TBF-2201',
                'method' => 'Card ending 4821', 'date' => '2025-11-12',
                'amount' => 1150000, 'status' => 'Paid'
            ]),
            new self([
                'id' => 'p2', 'ref' => 'PAY-9002', 'related' => 'TBH-1180',
                'method' => 'Bank transfer', 'date' => '2025-11-12',
                'amount' => 555000, 'status' => 'Paid'
            ]),
            new self([
                'id' => 'p3', 'ref' => 'PAY-9003', 'related' => 'TBF-2202',
                'method' => 'Card ending 4821', 'date' => '2025-11-16',
                'amount' => 980000, 'status' => 'Pending'
            ]),
            new self([
                'id' => 'p4', 'ref' => 'PAY-9004', 'related' => 'TBF-2195',
                'method' => 'Card ending 4821', 'date' => '2025-10-18',
                'amount' => 890000, 'status' => 'Paid'
            ]),
        ];
    }
}

