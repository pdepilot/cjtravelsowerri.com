<?php

namespace App\Http\Controllers;

use App\Core\Response;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(): Response
    {
        return $this->view('pages/flights', [
            'title' => 'Search Flights — Travelbookings',
            'flights' => Flight::all(),
        ]);
    }

    public function show(string $id = '1'): Response
    {
        return $this->view('pages/flight-details', [
            'title' => 'Flight Details — Travelbookings',
            'flightId' => $id,
        ]);
    }
}

