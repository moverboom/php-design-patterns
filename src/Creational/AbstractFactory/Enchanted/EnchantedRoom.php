<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Enchanted;

use Patterns\Creational\AbstractFactory\Direction;
use Patterns\Creational\AbstractFactory\MapSite;
use Patterns\Creational\AbstractFactory\Room;

final class EnchantedRoom extends Room
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
