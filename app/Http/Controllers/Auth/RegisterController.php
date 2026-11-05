<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Core\Request;
use App\Core\Response;

class RegisterController extends Controller
{
    public function showRegistrationForm(): Response
    {
        return $this->view('pages/register', [
            'title' => 'Create Account — Travelbookings',
        ]);
    }

    public function register(Request $request): Response
    {
        return $this->redirect('/customer/dashboard');
    }
}

