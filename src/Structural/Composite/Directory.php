<?php

declare(strict_types=1);

namespace Structural\Composite;

final class Directory implements Resource
{
    /**
     * @param Resource[] $resources
     */
    public function __construct(private array $resources)
    {
    }

    public function open(): array
    {
        $contents = [];
        foreach ($this->resources as $resource) {
            $contents[] = $resource->open();
        }

        return $contents;
    }
}
