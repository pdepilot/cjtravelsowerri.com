<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Core\Request;
use App\Core\Response;

class LoginController extends Controller
{
    public function showLoginForm(): Response
    {
        return $this->view('pages/login', [
            'title' => 'Sign In — Travelbookings',
        ]);
    }

    public function login(Request $request): Response
    {
        $email = $request->input('email');
        if (str_contains($email, 'admin')) {
            return $this->redirect('/admin/dashboard');
        }
        return $this->redirect('/customer/dashboard');
    }

    public function logout(): Response
    {
        return $this->redirect('/login');
    }
}

