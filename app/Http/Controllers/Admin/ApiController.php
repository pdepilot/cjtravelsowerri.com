<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class ApiController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('api', [
            'title' => 'API Integrations — Travelbookings Admin',
            'page' => 'api'
        ]);
    }
}
