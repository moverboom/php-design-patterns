<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

use IteratorAggregate;

/**
 * @implements IteratorAggregate<string>
 */
class Collection implements IteratorAggregate
{
    /**
     * @param string[] $elements
     */
    public function __construct(private array $elements)
    {
    }

    public function add(string $item): void
    {
        $this->elements[] = $item;
    }

    public function remove(string $element): void
    {
        $this->elements = array_filter(
            $this->elements,
            fn ($current) => $current !== $element
        );
    }

    public function item(int $position): string
    {
        return $this->elements[$position];
    }

    public function hasItem(int $position): bool
    {
        return isset($this->elements[$position]);
    }

    public function length(): int
    {
        return count($this->elements);
    }

    /**
     * This function would be useful if we'd have different types of lists in a polymorphic structure.
     * It would ensure calling code wouldn't have to know about each subclass.
     * So not really necessary in this example, but here for the sake of completeness
     *
     * @return SequentialIterator
     */
    public function getIterator(): SequentialIterator
    {
        return new SequentialIterator($this);
    }
}
