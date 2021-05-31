<?php

declare(strict_types=1);

namespace Creational\AbstractFactory\Normal;

use Creational\AbstractFactory\Door;
use Creational\AbstractFactory\Maze;
use Creational\AbstractFactory\Room;
use Creational\AbstractFactory\Wall;
use Creational\AbstractFactory\MazeFactory;

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
