<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class DashboardController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('dashboard', [
            'title' => 'Overview — Customer Dashboard — Travelbookings',
            'page' => 'overview'
        ]);
    }
}
