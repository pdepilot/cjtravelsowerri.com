<?php

namespace App\Core;

class Autoloader
{
    protected static string $baseDir;

    public static function register(string $baseDir): void
    {
        self::$baseDir = rtrim($baseDir, '/\\') . DIRECTORY_SEPARATOR;

        spl_autoload_register(function ($class) {
            $prefix = 'App\\';
            $baseDir = self::$baseDir . 'app' . DIRECTORY_SEPARATOR;

            $len = strlen($prefix);
            if (strncmp($prefix, $class, $len) !== 0) {
                return;
            }

            $relativeClass = substr($class, $len);
            $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

            if (file_exists($file)) {
                require_once $file;
            }
        });
    }
}

