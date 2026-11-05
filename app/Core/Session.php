<?php

namespace App\Core;

class Session
{
    protected static bool $started = false;

    public static function start(): void
    {
        if (self::$started || session_status() === PHP_SESSION_ACTIVE) {
            self::$started = true;
            return;
        }

        session_start();
        self::$started = true;

        if (!isset($_SESSION['_token'])) {
            $_SESSION['_token'] = bin2hex(random_bytes(32));
        }

        // Handle flash data aging
        if (isset($_SESSION['_flash']['next'])) {
            $_SESSION['_flash']['now'] = $_SESSION['_flash']['next'];
            unset($_SESSION['_flash']['next']);
        } else {
            $_SESSION['_flash']['now'] = [];
        }
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        self::start();
        return $_SESSION[$key] ?? $default;
    }

    public static function set(string $key, mixed $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function has(string $key): bool
    {
        self::start();
        return isset($_SESSION[$key]);
    }

    public static function remove(string $key): void
    {
        self::start();
        unset($_SESSION[$key]);
    }

    public static function flash(string $key, mixed $value): void
    {
        self::start();
        $_SESSION['_flash']['next'][$key] = $value;
    }

    public static function getFlash(string $key, mixed $default = null): mixed
    {
        self::start();
        return $_SESSION['_flash']['now'][$key] ?? $default;
    }

    public static function token(): string
    {
        self::start();
        return $_SESSION['_token'] ?? '';
    }
}

