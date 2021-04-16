<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Enchanted;

use Patterns\Creational\AbstractFactory\Door;
use Patterns\Creational\AbstractFactory\Maze;
use Patterns\Creational\AbstractFactory\Room;
use Patterns\Creational\AbstractFactory\Wall;
use Patterns\Creational\AbstractFactory\MazeFactory;

final class EnchantedMazeFactory extends MazeFactory
{
    public function makeWall(): Wall
    {
        return new EnchantedWall();
    }

    public function makeRoom(int $roomNumber): Room
    {
        return new EnchantedRoom($roomNumber);
    }

    public function makeDoor(Room $room1, Room $room2): Door
    {
        return new EnchantedDoor($room1, $room2);
    }
}
