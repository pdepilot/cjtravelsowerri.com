<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class DashboardController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('dashboard', [
            'title' => 'Dashboard — Travelbookings Admin',
            'page' => 'dashboard'
        ]);
    }
}
