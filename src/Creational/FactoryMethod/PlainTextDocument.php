<?php

declare(strict_types=1);

namespace Creational\FactoryMethod;

final class PlainTextDocument implements Document
{
    private string $content = '';

    public function write(string $line): void
    {
        $this->content .= $line . "\n";
    }

    public function read(): string
    {
        return $this->content;
    }
}
