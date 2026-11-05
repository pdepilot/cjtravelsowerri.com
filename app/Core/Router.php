<?php

namespace App\Core;

class Route
{
    public string $method;
    public string $path;
    public mixed $action;
    public ?string $name = null;
    protected array $paramNames = [];
    protected string $regex;

    public function __construct(string $method, string $path, mixed $action)
    {
        $this->method = strtoupper($method);
        $this->path = '/' . trim($path, '/');
        $this->action = $action;
        $this->compileRegex();
    }

    protected function compileRegex(): void
    {
        // Convert {param} into regex capture groups
        $pattern = preg_replace_callback('/\{([a-zA-Z0-9_]+)\}/', function ($matches) {
            $this->paramNames[] = $matches[1];
            return '([^/]+)';
        }, $this->path);

        $this->regex = '#^' . ($pattern === '/' ? '/' : $pattern) . '$#';
    }

    public function name(string $name): self
    {
        $this->name = $name;
        Router::registerName($name, $this);
        return $this;
    }

    public function matches(string $method, string $uri, array &$params = []): bool
    {
        if ($this->method !== 'ANY' && $this->method !== strtoupper($method)) {
            return false;
        }

        $normalizedUri = '/' . trim($uri, '/');
        if (preg_match($this->regex, $normalizedUri, $matches)) {
            array_shift($matches);
            $params = [];
            foreach ($this->paramNames as $index => $name) {
                $params[$name] = $matches[$index] ?? null;
            }
            return true;
        }

        return false;
    }
}

class Router
{
    /** @var Route[] */
    protected static array $routes = [];
    /** @var array<string, Route> */
    protected static array $namedRoutes = [];
    protected static ?Route $currentRoute = null;

    public static function get(string $path, mixed $action): Route
    {
        return self::addRoute('GET', $path, $action);
    }

    public static function post(string $path, mixed $action): Route
    {
        return self::addRoute('POST', $path, $action);
    }

    public static function any(string $path, mixed $action): Route
    {
        return self::addRoute('ANY', $path, $action);
    }

    protected static function addRoute(string $method, string $path, mixed $action): Route
    {
        $route = new Route($method, $path, $action);
        self::$routes[] = $route;
        return $route;
    }

    public static function registerName(string $name, Route $route): void
    {
        self::$namedRoutes[$name] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function currentRouteName(): ?string
    {
        return self::$currentRoute?->name;
    }

    public static function routeIs(string $pattern): bool
    {
        $current = self::currentRouteName();
        if ($current === null) {
            return false;
        }

        if ($pattern === $current) {
            return true;
        }

        if (str_ends_with($pattern, '*')) {
            $prefix = rtrim($pattern, '*');
            return str_starts_with($current, $prefix);
        }

        return false;
    }

    public static function route(string $name, array $params = []): string
    {
        if (!isset(self::$namedRoutes[$name])) {
            return '/' . trim($name, '/');
        }

        $path = self::$namedRoutes[$name]->path;
        foreach ($params as $key => $val) {
            $path = str_replace('{' . $key . '}', (string)$val, $path);
        }

        return $path;
    }

    public static function dispatch(Request $request): Response
    {
        $method = $request->method();
        $uri = $request->uri();

        foreach (self::$routes as $route) {
            $params = [];
            if ($route->matches($method, $uri, $params)) {
                self::$currentRoute = $route;
                return self::executeAction($route->action, $params, $request);
            }
        }

        return new Response(
            View::render('pages/404', ['title' => 'Page Not Found', 'uri' => $uri]),
            404
        );
    }

    protected static function executeAction(mixed $action, array $params, Request $request): Response
    {
        $result = null;

        if (is_callable($action)) {
            $result = call_user_func_array($action, array_merge([$request], array_values($params)));
        } elseif (is_array($action) && count($action) === 2) {
            [$class, $method] = $action;
            $controller = new $class();
            $result = call_user_func_array([$controller, $method], array_merge([$request], array_values($params)));
        } elseif (is_string($action) && str_contains($action, '@')) {
            [$class, $method] = explode('@', $action);
            $fullClass = str_starts_with($class, 'App\\') ? $class : 'App\\Http\\Controllers\\' . $class;
            $controller = new $fullClass();
            $result = call_user_func_array([$controller, $method], array_merge([$request], array_values($params)));
        }

        if ($result instanceof Response) {
            return $result;
        }

        if (is_array($result)) {
            return Response::json($result);
        }

        return new Response((string)$result);
    }
}

