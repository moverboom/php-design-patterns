<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

abstract class Room extends MapSite
{
    private array $sides;

    public function __construct(private int $roomNumber)
    {
        $this->sides = [];
    }

    public function side(Direction $direction): MapSite
    {
        return $this->sides[$direction->getValue()] ?? throw new \RuntimeException("No side at {$direction->getValue()}");
    }

    public function setSide(Direction $direction, MapSite $mapSite): void
    {
        $this->sides[$direction->getValue()] = $mapSite;
    }

    public function roomNumber(): int
    {
        return $this->roomNumber;
    }

    abstract public function enter(): void;
}
