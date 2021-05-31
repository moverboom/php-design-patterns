<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

final class Maze
{
    private array $rooms;

    public function __construct()
    {
        $this->rooms = [];
    }

    public function addRoom(Room $room): void
    {
        $this->rooms[$room->roomNumber()] = $room;
    }

    public function room(int $roomNumber): Room
    {
        return $this->rooms[$roomNumber] ?? throw new \RuntimeException("No room at {$roomNumber}");
    }

    public function rooms(): array
    {
        return $this->rooms;
    }
}
