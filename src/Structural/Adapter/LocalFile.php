<?php

declare(strict_types=1);

namespace Structural\Adapter;

final class LocalFile implements File
{
    public function open(): string
    {
        return 'LOCAL FILE';
    }
}
