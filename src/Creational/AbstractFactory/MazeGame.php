<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

/**
 * This would be the 'Client'. The class the uses and calls the abstract factory, and only knows about
 * the abstract factory and the abstract classes returned by it.
 * It doesn't know, or care, if it's a normal or enchanted maze.
 */
final class MazeGame
{
    public static function create(MazeFactory $factory): Maze
    {
        $maze = $factory->makeMaze();
        $room1 = $factory->makeRoom(1);
        $room2 = $factory->makeRoom(2);
        $door = $factory->makeDoor($room1, $room2);

        $maze->addRoom($room1);
        $maze->addRoom($room2);

        $room1->setSide(Direction::NORTH(), $factory->makeWall());
        $room1->setSide(Direction::EAST(), $door);
        $room1->setSide(Direction::SOUTH(), $factory->makeWall());
        $room1->setSide(Direction::WEST(), $factory->makeWall());

        $room2->setSide(Direction::NORTH(), $factory->makeWall());
        $room2->setSide(Direction::EAST(), $factory->makeWall());
        $room2->setSide(Direction::SOUTH(), $factory->makeWall());
        $room2->setSide(Direction::WEST(), $door);

        return $maze;
    }
}
