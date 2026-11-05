<?php

require_once __DIR__ . '/../app/Core/Autoloader.php';
require_once __DIR__ . '/../app/Core/App.php';

$app = App\Core\App::init(dirname(__DIR__));

return $app;

