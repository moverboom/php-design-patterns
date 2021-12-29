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
        /**
         * Instead of passing the ata to the algorithm,
         * we could also pass $this to let the algorithm request the data it needs
         */
        return $this->lineBreak->convert($text);
    }
}
