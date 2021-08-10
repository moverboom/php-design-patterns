<?php

declare(strict_types=1);

namespace Creational\Singleton;

final class Sun
{
    private static $instance;

    private function __construct()
    {
    }

    public static function instance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone(): void
    {
    }
}
