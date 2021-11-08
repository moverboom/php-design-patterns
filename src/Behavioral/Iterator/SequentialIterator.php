<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

use Iterator;

/**
 * @implements Iterator<int>
 */
final class SequentialIterator implements Iterator
{
    private int $position = 0;

    public function __construct(private Collection $collection)
    {
    }

    public function current(): string
    {
        return $this->collection->item($this->position);
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->collection->hasItem($this->position);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
