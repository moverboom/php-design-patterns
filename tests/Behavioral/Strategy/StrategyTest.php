<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    /** @test */
    public function it_converts_to_markdown(): void
    {
        $input = "This is some markdown text  with  line breaks.";
        $expected = "This is some markdown text\nwith\nline breaks.";

        $editor = new TextEditor(new Markdown());

        self::assertSame(
            $expected,
            $editor->format($input)
        );
    }
    /** @test */
    public function it_converts_to_end_of_sentence(): void
    {
        $input = "This is normal text. It breaks at the end of the sentence. But skips the last one";
        $expected = "This is normal text.\nIt breaks at the end of the sentence.\nBut skips the last one";

        $editor = new TextEditor(new EndOfSentence());

        self::assertSame(
            $expected,
            $editor->format($input)
        );
    }
}
