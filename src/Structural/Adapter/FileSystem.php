<?php

declare(strict_types=1);

namespace Structural\Adapter;

use Generator;

final class FileSystem
{
    /**
     * @param File[] $files
     */
    public function __construct(private iterable $files)
    {
    }

    public function iterateDir(): Generator
    {
        foreach ($this->files as $file) {
            yield $file->open();
        }
    }
}
