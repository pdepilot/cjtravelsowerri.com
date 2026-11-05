<?php

return [
    'default' => 'sqlite',
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => __DIR__ . '/../database/database.sqlite',
            'prefix' => '',
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => 'travelbookings',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
        ],
    ],
];

