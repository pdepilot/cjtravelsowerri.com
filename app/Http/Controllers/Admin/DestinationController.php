<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class DestinationController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('destinations', [
            'title' => 'Destinations — Travelbookings Admin',
            'page' => 'destinations'
        ]);
    }
}
