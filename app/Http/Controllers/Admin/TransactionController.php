<?php

namespace App\Http\Controllers\Admin;

use App\Core\Response;

class TransactionController extends AdminController
{
    public function index(): Response
    {
        return $this->adminView('transactions', [
            'title' => 'Transactions — Travelbookings Admin',
            'page' => 'transactions'
        ]);
    }
}
