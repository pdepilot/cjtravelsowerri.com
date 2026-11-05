<?php

use App\Core\Router;
use App\Models\Flight;
use App\Models\Hotel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Router::get('/api/flights', function () {
    return [
        'status' => 'success',
        'data' => array_map(fn($f) => $f->toArray(), Flight::all()),
    ];
});

Router::get('/api/hotels', function () {
    return [
        'status' => 'success',
        'data' => array_map(fn($h) => $h->toArray(), Hotel::all()),
    ];
});

