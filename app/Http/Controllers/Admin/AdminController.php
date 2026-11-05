<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Core\Response;

abstract class AdminController extends Controller
{
    protected function adminView(string $view, array $data = []): Response
    {
        return $this->view('admin/' . $view, array_merge([
            'adminUser' => 'Super Administrator',
            'notificationsCount' => 3,
        ], $data));
    }
}

