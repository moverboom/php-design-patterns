<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

final class TextEditor
{
    public function __construct(private LineBreak $lineBreak)
    {
    }

    public function format(string $text): string
    {
        return $this->lineBreak->convert($text);
    }
}
