<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class LoanController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('loans', [
            'title' => 'Travel Financing & Loans — Travelbookings Admin',
            'page' => 'loans'
        ]);
    }
}
