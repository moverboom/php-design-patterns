<?php

declare(strict_types=1);

namespace Creational\AbstractFactory\Enchanted;

use Creational\AbstractFactory\Door;
use Creational\AbstractFactory\Maze;
use Creational\AbstractFactory\Room;
use Creational\AbstractFactory\Wall;
use Creational\AbstractFactory\MazeFactory;

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
