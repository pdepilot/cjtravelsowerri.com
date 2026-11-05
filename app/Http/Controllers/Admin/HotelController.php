<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class HotelController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('hotels', [
            'title' => 'Hotel Partners — Travelbookings Admin',
            'page' => 'hotels'
        ]);
    }
}
