<?php

use App\Core\App;
use App\Core\Request;
use App\Core\Response;
use App\Core\Router;
use App\Core\Session;
use App\Core\View;

if (!function_exists('app')) {
    function app(): App
    {
        return App::getInstance();
    }
}

if (!function_exists('request')) {
    function request(): Request
    {
        return App::getInstance()->getRequest();
    }
}

if (!function_exists('view')) {
    function view(string $view, array $data = []): string
    {
        return View::render($view, $data);
    }
}

if (!function_exists('response')) {
    function response(string $content = '', int $status = 200, array $headers = []): Response
    {
        return new Response($content, $status, $headers);
    }
}

if (!function_exists('redirect')) {
    function redirect(string $url, int $status = 302): Response
    {
        return Response::redirect($url, $status);
    }
}

if (!function_exists('route')) {
    function route(string $name, array $params = []): string
    {
        return Router::route($name, $params);
    }
}

if (!function_exists('routeIs')) {
    function routeIs(string $pattern): bool
    {
        return Router::routeIs($pattern);
    }
}

if (!function_exists('url')) {
    function url(string $path = ''): string
    {
        $base = rtrim(config('app.url', ''), '/');
        $cleanPath = '/' . ltrim($path, '/');
        return $base . $cleanPath;
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $clean = ltrim($path, '/');
        // If running through web root, assets are relative to public / root
        return '/' . $clean;
    }
}

if (!function_exists('config')) {
    function config(string $key, mixed $default = null): mixed
    {
        static $configs = [];

        $parts = explode('.', $key);
        $file = $parts[0];

        if (!isset($configs[$file])) {
            $path = App::getInstance()->getBaseDir() . 'config' . DIRECTORY_SEPARATOR . $file . '.php';
            if (file_exists($path)) {
                $configs[$file] = require $path;
            } else {
                $configs[$file] = [];
            }
        }

        $data = $configs[$file];
        for ($i = 1; $i < count($parts); $i++) {
            $part = $parts[$i];
            if (is_array($data) && array_key_exists($part, $data)) {
                $data = $data[$part];
            } else {
                return $default;
            }
        }

        return $data;
    }
}

if (!function_exists('csrf_token')) {
    function csrf_token(): string
    {
        return Session::token();
    }
}

if (!function_exists('csrf_field')) {
    function csrf_field(): string
    {
        return '<input type="hidden" name="_token" value="' . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') . '" />';
    }
}

if (!function_exists('session')) {
    function session(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return Session::class;
        }
        return Session::get($key, $default);
    }
}

if (!function_exists('old')) {
    function old(string $key, mixed $default = ''): mixed
    {
        return Session::getFlash('old_' . $key, $default);
    }
}

if (!function_exists('e')) {
    function e(mixed $value): string
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
    }
}

