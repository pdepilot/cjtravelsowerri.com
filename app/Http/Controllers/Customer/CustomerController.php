<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Core\Response;
use App\Models\User;

abstract class CustomerController extends Controller
{
    protected function customerView(string $view, array $data = []): Response
    {
        return $this->view('customer/' . $view, array_merge([
            'user' => User::current(),
            'notificationsCount' => 3,
        ], $data));
    }
}
