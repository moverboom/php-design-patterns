<?php

declare(strict_types=1);

namespace Structural\Facade;

final class Bios
{
    private bool $running = false;

    public function start(): void
    {
        $this->running = true;
    }

    public function startOs(OperatingSystem $operatingSystem): bool
    {
        if (!$this->running) {
            throw new \RuntimeException('Bios not running');
        }

        return $operatingSystem->start();
    }
}
