<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod;

use Patterns\Creational\FactoryMethod\CSVWriter;
use Patterns\Creational\FactoryMethod\TextWriter;
use PHPUnit\Framework\TestCase;

final class TextWriterTest extends TestCase
{
    /** @test */
    public function it_creates_plain_text_file(): void
    {
        $writer = new TextWriter();
        $writer->write('This is the first line.');
        $writer->write('And it has a second line.');

        self::assertSame(
            <<<TEXT
            This is the first line.
            And it has a second line.

            TEXT,
            $writer->read()
        );
    }

    /** @test */
    public function it_creates_csv_file(): void
    {
        $writer = new CSVWriter();
        $writer->write('This is the first line.');
        $writer->write('And it has a second line.');

        self::assertSame(
            <<<CSV
            This is the first line.
            And it has a second line.

            CSV,
            $writer->read()
        );
    }
}
