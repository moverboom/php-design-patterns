<?php

declare(strict_types=1);

namespace Creational\Prototype;

final class Circle extends Shape
{
    public function draw(Position $start, Position $end): array
    {
        $this->start = $start;
        $this->end = $end;

        return [
            'start' => [
                'x' => $this->start->x(),
                'y' => $this->start->y(),
            ],
            'end' => [
                'x' => $this->end->x(),
                'y' => $this->end->y(),
            ],
            'type' => 'circle',
        ];
    }
}
