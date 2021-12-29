<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

final class Markdown implements LineBreak
{
    public function convert(string $text): string
    {
        return str_replace("  ", "\n", $text);
    }
}
