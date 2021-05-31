<?php

declare(strict_types=1);

namespace Creational\AbstractFactory\Normal;

use Creational\AbstractFactory\Direction;
use Creational\AbstractFactory\MapSite;
use Creational\AbstractFactory\Room;

final class NormalRoom extends Room
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

    public function enter(): void
    {
        //do something
    }
}
