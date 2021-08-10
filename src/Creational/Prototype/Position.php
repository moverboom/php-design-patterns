<?php

declare(strict_types=1);

namespace Creational\Prototype;

final class Position
{
    public function __construct(private int $x, private int $y)
    {
    }

    public function x(): int
    {
        return $this->x;
    }

    public function y(): int
    {
        return $this->y;
    }
}
