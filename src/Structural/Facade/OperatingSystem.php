<?php

declare(strict_types=1);

namespace Structural\Facade;

final class OperatingSystem
{
    private bool $running = false;

    public function start(): bool
    {
        if ($this->running) {
            throw new \RuntimeException('Already running');
        }

        $this->running = true;

        return $this->running;
    }


}
