<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class FlightController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('flights', [
            'title' => 'Flight Inventory — Travelbookings Admin',
            'page' => 'flights'
        ]);
    }
}
