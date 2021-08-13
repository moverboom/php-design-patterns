<?php

declare(strict_types=1);

namespace Structural\Flyweight;

interface Layout
{
    public function render(string $character): string;
}
