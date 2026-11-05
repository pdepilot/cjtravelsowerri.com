<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class CustomerController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('customers', [
            'title' => 'Customers — Travelbookings Admin',
            'page' => 'customers'
        ]);
    }
}
