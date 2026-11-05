<?php

namespace App\Core;

class Request
{
    protected string $method;
    protected string $uri;
    protected array $query;
    protected array $post;
    protected array $server;

    public function __construct()
    {
        $this->server = $_SERVER;
        $this->method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $this->query = $_GET;
        $this->post = $_POST;

        $rawUri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($rawUri, PHP_URL_PATH) ?: '/';

        // Strip subfolder if running in subfolder like /TravelBooking/public
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $scriptDir = dirname($scriptName);
        if ($scriptDir !== '/' && $scriptDir !== '\\' && strpos($path, $scriptDir) === 0) {
            $path = substr($path, strlen($scriptDir));
        }

        $this->uri = '/' . trim($path, '/');
    }

    public function method(): string
    {
        return $this->method;
    }

    public function isMethod(string $method): bool
    {
        return strcasecmp($this->method, $method) === 0;
    }

    public function uri(): string
    {
        return $this->uri;
    }

    public function all(): array
    {
        return array_merge($this->query, $this->post);
    }

    public function input(?string $key = null, mixed $default = null): mixed
    {
        $all = $this->all();
        if ($key === null) {
            return $all;
        }
        return $all[$key] ?? $default;
    }

    public function has(string $key): bool
    {
        $all = $this->all();
        return array_key_exists($key, $all);
    }

    public function query(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return $this->query;
        }
        return $this->query[$key] ?? $default;
    }

    public function post(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return $this->post;
        }
        return $this->post[$key] ?? $default;
    }

    public function ip(): string
    {
        return $this->server['REMOTE_ADDR'] ?? '127.0.0.1';
    }

    public function userAgent(): string
    {
        return $this->server['HTTP_USER_AGENT'] ?? '';
    }
}

