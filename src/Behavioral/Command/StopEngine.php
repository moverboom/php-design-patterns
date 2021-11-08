<?php

declare(strict_types=1);

namespace Behavioral\Command;

final class StopEngine implements Command
{
    public function __construct(private Engine $engine)
    {
    }

    public function execute(): void
    {
        $this->engine->stop();
    }
}
