<?php

declare(strict_types=1);

namespace Creational\Prototype;

abstract class Shape
{
    protected Position $start;
    protected Position $end;

    public function __construct()
    {
        $this->start = new Position(0, 0);
        $this->end = new Position(0, 0);
    }

    abstract public function draw(Position $start, Position $end): array;

    public function __clone(): void
    {
        $this->start = clone $this->start;
        $this->end = clone $this->end;
    }
}
