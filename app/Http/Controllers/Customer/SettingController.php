<?php

namespace App\Http\Controllers\Customer;

use App\Core\Response;

class SettingController extends CustomerController
{
    public function index(): Response
    {
        return $this->customerView('settings', [
            'title' => 'Settings — Customer Dashboard — Travelbookings',
            'page' => 'settings'
        ]);
    }
}
