<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class HotelController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('hotels', [
            'title' => 'My Hotels — Customer Dashboard — Travelbookings',
            'page' => 'hotels'
        ]);
    }
}
