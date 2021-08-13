<?php

declare(strict_types=1);

namespace Structural\Flyweight;

final class UpperCase implements Layout
{
    public function render(string $character): string
    {
        return strtoupper($character);
    }
}
