<?php

namespace App\Core;

class App
{
    protected static ?App $instance = null;
    protected string $baseDir;
    protected Request $request;

    public function __construct(string $baseDir)
    {
        $this->baseDir = rtrim($baseDir, '/\\') . DIRECTORY_SEPARATOR;
        self::$instance = $this;

        // Initialize autoloader and core services
        Autoloader::register($this->baseDir);
        require_once __DIR__ . '/helpers.php';

        View::setViewsPath($this->baseDir . 'resources' . DIRECTORY_SEPARATOR . 'views');
        Session::start();

        $this->request = new Request();
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            throw new \RuntimeException("Application has not been initialized.");
        }
        return self::$instance;
    }

    public static function init(string $baseDir): self
    {
        if (self::$instance === null) {
            self::$instance = new self($baseDir);
        }
        return self::$instance;
    }

    public function getBaseDir(): string
    {
        return $this->baseDir;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function run(): void
    {
        // Load web routes
        $routesFile = $this->baseDir . 'routes' . DIRECTORY_SEPARATOR . 'web.php';
        if (file_exists($routesFile)) {
            require_once $routesFile;
        }

        // Dispatch request
        $response = Router::dispatch($this->request);
        $response->send();
    }
}

