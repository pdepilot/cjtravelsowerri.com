<?php

namespace App\Http\Controllers;

use App\Core\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return $this->view('pages/home', [
            'title' => 'Travelbookings — A Quieter Way to Travel',
        ]);
    }

    public function about(): Response
    {
        return $this->view('pages/about', [
            'title' => 'About Us — Travelbookings',
        ]);
    }

    public function contact(): Response
    {
        return $this->view('pages/contact', [
            'title' => 'Contact Support — Travelbookings',
        ]);
    }

    public function destinations(): Response
    {
        return $this->view('pages/destinations', [
            'title' => 'Curated Destinations — Travelbookings',
        ]);
    }

    public function financing(): Response
    {
        return $this->view('pages/financing', [
            'title' => 'Travel Financing — Travelbookings',
        ]);
    }
}

