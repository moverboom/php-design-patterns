<?php

declare(strict_types=1);

namespace Behavioral\Memento;

use PHPUnit\Framework\TestCase;

final class MementoTest extends TestCase
{
    /** @test */
    public function it_can_undo(): void
    {
        $editor = new UndoEditor(new Editor());

        $editor->edit("Hi, this is the first sentence.\n");
        $editor->edit("Let's add a second sentence.\n");
        $editor->edit("We'll add a third one as well.\n");
        $editor->edit("Alright, a forth because it's Friday.");

        self::assertSame(
            "Hi, this is the first sentence.\n" .
            "Let's add a second sentence.\n" .
            "We'll add a third one as well.\n" .
            "Alright, a forth because it's Friday.",
            $editor->render()
        );

        $editor->undo();
        self::assertSame(
            "Hi, this is the first sentence.\n" .
            "Let's add a second sentence.\n" .
            "We'll add a third one as well.\n",
            $editor->render()
        );

        $editor->undo();
        $editor->undo();
        self::assertSame(
            "Hi, this is the first sentence.\n",
            $editor->render()
        );
    }
}
