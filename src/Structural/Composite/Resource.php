<?php

declare(strict_types=1);

namespace Structural\Composite;

interface Resource
{
    public function open(): array;
}
