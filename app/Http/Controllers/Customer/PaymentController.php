<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class PaymentController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('payments', [
            'title' => 'Payments — Customer Dashboard — Travelbookings',
            'page' => 'payments'
        ]);
    }
}
