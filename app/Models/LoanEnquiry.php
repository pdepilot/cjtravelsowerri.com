<?php

namespace App\Models;

class LoanEnquiry extends Model
{
    public static function all(): array
    {
        return [
            new self([
                'id' => 'fin1', 'ref' => 'TBFIN-0452', 'amount' => 750000,
                'period' => '6 months', 'purpose' => 'Leisure / holiday',
                'submitted' => '2025-11-10', 'status' => 'In review',
                'note' => 'Awaiting assessment by an independent licensed lending partner.'
            ]),
            new self([
                'id' => 'fin2', 'ref' => 'TBFIN-0453', 'amount' => 1200000,
                'period' => '12 months', 'purpose' => 'Business travel',
                'submitted' => '2025-11-15', 'status' => 'Draft',
                'note' => 'Draft enquiry — not yet submitted to a lending partner.'
            ]),
        ];
    }
}

