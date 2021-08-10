<?php

declare(strict_types=1);

namespace Tests\Creational\Prototype;

use Creational\Prototype\Circle;
use Creational\Prototype\Editor;
use Creational\Prototype\Position;
use PHPUnit\Framework\TestCase;

final class EditorTest extends TestCase
{
    /** @test */
    public function it_draws(): void
    {
        $editor = new Editor(new Circle());

        $start = new Position(5, 10);
        $end = new Position(5, 15);
        $result = $editor->draw($start, $end);

        self::assertSame(
            [
                'start' => [
                    'x' => $start->x(),
                    'y' => $start->y(),
                ],
                'end' => [
                    'x' => $end->x(),
                    'y' => $end->y(),
                ],
                'type' => 'circle',
            ],
            $result
        );
    }
}
