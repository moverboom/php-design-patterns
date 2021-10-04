<?php

declare(strict_types=1);

namespace Behavioral\Command;

final class EngineControls
{
    public function handle(Command $command): void
    {
        $command->execute();
    }
}
