<?php

namespace App\Core;

class View
{
    protected static string $viewsPath;
    protected ?string $layout = null;
    protected array $layoutData = [];
    protected array $data = [];

    public static function setViewsPath(string $path): void
    {
        self::$viewsPath = rtrim($path, '/\\') . DIRECTORY_SEPARATOR;
    }

    public static function render(string $view, array $data = []): string
    {
        $instance = new self();
        return $instance->renderView($view, $data);
    }

    public function renderView(string $view, array $data = []): string
    {
        $this->data = $data;
        $viewFile = self::$viewsPath . str_replace(['/', '.'], DIRECTORY_SEPARATOR, $view) . '.php';

        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View file not found: {$viewFile}");
        }

        extract($data);

        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        if ($this->layout !== null) {
            $layoutFile = self::$viewsPath . str_replace(['/', '.'], DIRECTORY_SEPARATOR, $this->layout) . '.php';
            if (!file_exists($layoutFile)) {
                throw new \RuntimeException("Layout file not found: {$layoutFile}");
            }

            $layoutVariables = array_merge($this->data, $this->layoutData, ['content' => $content]);
            extract($layoutVariables);

            ob_start();
            include $layoutFile;
            return ob_get_clean();
        }

        return $content;
    }

    public function layout(string $layout, array $data = []): void
    {
        $this->layout = $layout;
        $this->layoutData = $data;
    }

    public function include(string $partial, array $data = []): void
    {
        $partialFile = self::$viewsPath . str_replace(['/', '.'], DIRECTORY_SEPARATOR, $partial) . '.php';
        if (!file_exists($partialFile)) {
            throw new \RuntimeException("Partial file not found: {$partialFile}");
        }

        extract(array_merge($this->data, $data));
        include $partialFile;
    }

    public function escape(mixed $value): string
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
    }

    public function raw(mixed $value): string
    {
        return (string)$value;
    }
}

