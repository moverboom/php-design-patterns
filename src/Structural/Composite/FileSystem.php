<?php

declare(strict_types=1);

namespace Structural\Composite;

use Generator;

final class FileSystem
{
    public function __construct(private Resource $base)
    {
    }

    public function list(): array
    {
        return $this->base->open();
    }
}
