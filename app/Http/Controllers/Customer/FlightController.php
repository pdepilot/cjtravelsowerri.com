<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class FlightController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('flights', [
            'title' => 'My Flights — Customer Dashboard — Travelbookings',
            'page' => 'flights'
        ]);
    }
}
