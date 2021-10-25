<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

use Iterator;

final class ReverseIterator implements Iterator
{
    private int $position;

    public function __construct(private Collection $collection)
    {
        $this->position = $this->collection->length() - 1;
    }

    public function current()
    {
        return $this->collection->item($this->position);
    }

    public function next()
    {
        $this->position--;
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
        $this->position = $this->collection->length() - 1;
    }
}
