<?php

declare(strict_types=1);

namespace Creational\FactoryMethod;

interface Document
{
    public function write(string $line): void;

    public function read(): string;
}
