<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

abstract class Door extends MapSite
{
    private bool $isOpen;

    public function __construct(private Room $room1, private Room $room2)
    {
        $this->isOpen = false;
    }

    abstract public function enter(): void;
}
