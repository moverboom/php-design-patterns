<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

abstract class MazeFactory
{
    public function makeMaze(): Maze
    {
        return new Maze();
    }

    abstract public function makeWall(): Wall;

    abstract public function makeRoom(int $roomNumber): Room;

    abstract public function makeDoor(Room $room1, Room $room2): Door;
}
