<?php

declare(strict_types=1);

namespace Structural\Proxy;

final class Logger
{
    private array $entries;

    public function log(string $entry): void
    {
        $this->entries[] = $entry;
    }

    public function read(): string
    {
        return implode("\n", $this->entries);
    }
}
