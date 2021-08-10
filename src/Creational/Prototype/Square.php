<?php

declare(strict_types=1);

namespace Creational\Prototype;

final class Square extends Shape
{
    public function draw(Position $start, Position $end): array
    {
        return [
            'start' => [
                'x' => $this->start->x(),
                'y' => $this->start->y(),
            ],
            'end' => [
                'x' => $this->end->x(),
                'y' => $this->end->y(),
            ],
            'type' => 'square'
        ];
    }
}
