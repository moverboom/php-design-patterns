<?php

declare(strict_types=1);

namespace Behavioral\Observer;

final class Product
{
    public function __construct(private string $name, private int $price)
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): int
    {
        return $this->price;
    }
}
