<?php

declare(strict_types=1);

namespace Structural\Flyweight;

final class LowerCase implements Layout
{
    public function render(string $character): string
    {
        return strtolower($character);
    }
}
