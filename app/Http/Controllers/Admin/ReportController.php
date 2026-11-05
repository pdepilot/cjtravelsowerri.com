<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class ReportController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('reports', [
            'title' => 'Financial Reports — Travelbookings Admin',
            'page' => 'reports'
        ]);
    }
}
