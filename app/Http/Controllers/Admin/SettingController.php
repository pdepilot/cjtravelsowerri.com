<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class SettingController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('settings', [
            'title' => 'Console Settings — Travelbookings Admin',
            'page' => 'settings'
        ]);
    }
}
