<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class FinancingController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('financing', [
            'title' => 'Travel Financing — Customer Dashboard — Travelbookings',
            'page' => 'financing'
        ]);
    }
}
