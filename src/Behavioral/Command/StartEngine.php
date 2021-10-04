<?php

declare(strict_types=1);

namespace Behavioral\Command;

final class StartEngine implements Command
{
    public function __construct(private Engine $engine)
    {
    }

    public function execute()
    {
        $this->engine->start();
    }
}
