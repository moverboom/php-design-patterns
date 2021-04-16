<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Normal;

use Patterns\Creational\AbstractFactory\Door;
use Patterns\Creational\AbstractFactory\Maze;
use Patterns\Creational\AbstractFactory\Room;
use Patterns\Creational\AbstractFactory\Wall;
use Patterns\Creational\AbstractFactory\MazeFactory;

final class NormalMazeFactory extends MazeFactory
{
    public function makeWall(): Wall
    {
        return new NormalWall();
    }

    public function makeRoom(int $roomNumber): Room
    {
        return new NormalRoom($roomNumber);
    }

    public function makeDoor(Room $room1, Room $room2): Door
    {
        return new NormalDoor($room1, $room2);
    }
}
