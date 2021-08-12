<?php

declare(strict_types=1);

namespace Structural\Facade;

/**
 * This is the facade that provided the unified way to interact with the subsystem.
 */
final class Boot
{
    public function boot(): bool
    {
        $bios = new Bios();
        $bios->start();
        $operatingSystem = new OperatingSystem();

        return $bios->startOs($operatingSystem);
    }
}
