<?php

namespace App\Models;

class User extends Model
{
    public static function current(): self
    {
        return new self([
            'name' => 'Adaeze Okonkwo',
            'firstName' => 'Adaeze',
            'lastName' => 'Okonkwo',
            'initials' => 'AO',
            'email' => 'adaeze.okonkwo@example.com',
            'phone' => '+234 812 345 6789',
            'country' => 'Nigeria',
            'city' => 'Lagos',
            'memberSince' => 'January 2024',
            'tier' => 'Gold member',
            'passport' => 'A12984572',
            'issuingCountry' => 'Nigeria (NGA)',
            'passportExpiry' => '2031-08-14',
            'frequentFlyer' => 'BA-78923410'
        ]);
    }
}

