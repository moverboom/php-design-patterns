<?php

declare(strict_types=1);

namespace Creational\Prototype;

final class Editor
{
    public function __construct(private Shape $prototype)
    {
    }

    public function draw(Position $start, Position $end): array
    {
        $shape = clone $this->prototype;
        return $shape->draw($start, $end);
    }
}
