<?php

declare(strict_types=1);

namespace Structural\Composite;

final class File implements Resource
{
    public function open(): array
    {
        return ['file'];
    }
}
