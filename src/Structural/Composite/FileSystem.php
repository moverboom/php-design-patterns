<?php

declare(strict_types=1);

namespace Structural\Composite;

use Generator;

final class FileSystem
{
    /**
     * @param Resource[] $resources
     */
    public function __construct(private array $resources)
    {
    }

    public function list(): array
    {
        $fileSystem = [];
        foreach ($this->resources as $resource) {
            $fileSystem[] = $resource->open();
        }

        return $fileSystem;
    }
}
