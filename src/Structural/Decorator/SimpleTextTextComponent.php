<?php

declare(strict_types=1);

namespace Structural\Decorator;

final class SimpleTextTextComponent implements TextComponent
{
    public function __construct(private string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}
