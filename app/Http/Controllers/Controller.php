<?php

namespace App\Http\Controllers;

use App\Core\Response;
use App\Core\View;

abstract class Controller
{
    protected function view(string $view, array $data = []): Response
    {
        $content = View::render($view, $data);
        return new Response($content);
    }

    protected function json(mixed $data, int $status = 200): Response
    {
        return Response::json($data, $status);
    }

    protected function redirect(string $url, int $status = 302): Response
    {
        return Response::redirect($url, $status);
    }
}

