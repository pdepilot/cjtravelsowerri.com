<?php

namespace App\Http\Controllers;

use App\Core\Response;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(): Response
    {
        return $this->view('pages/hotels', [
            'title' => 'Luxury Hotels & Resorts — Travelbookings',
            'hotels' => Hotel::all(),
        ]);
    }

    public function show(string $id = '1'): Response
    {
        return $this->view('pages/hotel-details', [
            'title' => 'Hotel Details — Travelbookings',
            'hotelId' => $id,
        ]);
    }
}

