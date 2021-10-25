<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

final class IteratorTest extends TestCase
{
    /** @test */
    public function it_iterates_sequentially(): void
    {
        $collection = new Collection([
            'a',
            'b',
            'c',
        ]);
        $iterator = new SequentialIterator($collection);

        self::assertSame(
            'a',
            $iterator->current()
        );
        $iterator->next();
        self::assertSame(
            'b',
            $iterator->current()
        );
        $iterator->next();
        self::assertSame(
            'c',
            $iterator->current()
        );

        self::assertTrue($iterator->valid());
        $iterator->next();
        self::assertFalse($iterator->valid());
    }

    /** @test */
    public function it_iterates_reversed(): void
    {
        $collection = new Collection([
            'a',
            'b',
            'c',
        ]);
        $iterator = new ReverseIterator($collection);

        self::assertSame(
            'c',
            $iterator->current()
        );
        $iterator->next();
        self::assertSame(
            'b',
            $iterator->current()
        );
        $iterator->next();
        self::assertSame(
            'a',
            $iterator->current()
        );

        self::assertTrue($iterator->valid());
        $iterator->next();
        self::assertFalse($iterator->valid());
    }
}
