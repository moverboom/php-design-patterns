<?php

declare(strict_types=1);

namespace Structural\Proxy;

final class LocalFile implements File
{
    public function __construct(private string $fileName)
    {
    }

    public function open(): string
    {
        return 'Actual file contents of ' . $this->fileName;
    }
}
