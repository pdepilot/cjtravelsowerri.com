<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class ProfileController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('profile', [
            'title' => 'My Profile — Customer Dashboard — Travelbookings',
            'page' => 'profile'
        ]);
    }
}
