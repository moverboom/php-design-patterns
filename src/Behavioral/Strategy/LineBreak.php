<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

interface LineBreak
{
    public function convert(string $text): string;
}
