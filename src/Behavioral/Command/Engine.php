<?php

declare(strict_types=1);

namespace Behavioral\Command;

final class Engine
{
    private string $state;

    public function __construct()
    {
        $this->state = 'off';
    }

    public function start(): void
    {
        $this->state = 'running';
    }

    public function stop(): void
    {
        $this->state = 'off';
    }

    public function state(): string
    {
        return $this->state;
    }
}
