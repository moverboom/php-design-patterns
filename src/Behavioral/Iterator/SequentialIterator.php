<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

use Iterator;

final class SequentialIterator implements Iterator
{
    private int $position = 0;

    public function __construct(private Collection $collection)
    {
    }

    public function current()
    {
        return $this->collection->item($this->position);
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return $this->collection->hasItem($this->position);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}
