<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory;

use Creational\AbstractFactory\Enchanted\EnchantedMazeFactory;
use Creational\AbstractFactory\Enchanted\EnchantedRoom;
use Creational\AbstractFactory\MazeGame;
use Creational\AbstractFactory\Normal\NormalMazeFactory;
use Creational\AbstractFactory\Normal\NormalRoom;
use PHPUnit\Framework\TestCase;

final class MazeGameTest extends TestCase
{
    /** @test */
    public function it_creates_normal_maze(): void
    {
        $mazeGame = MazeGame::create(new NormalMazeFactory());

        self::assertCount(2, $mazeGame->rooms());
        foreach ($mazeGame->rooms() as $room) {
            self::assertInstanceOf(NormalRoom::class, $room);
        }
    }

    /** @test */
    public function it_creates_enchanted_maze(): void
    {
        $mazeGame = MazeGame::create(new EnchantedMazeFactory());

        self::assertCount(2, $mazeGame->rooms());
        foreach ($mazeGame->rooms() as $room) {
            self::assertInstanceOf(EnchantedRoom::class, $room);
        }
    }
}
