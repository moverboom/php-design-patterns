<?php

declare(strict_types=1);

namespace Structural\Adapter;

interface File
{
    public function open(): string;
}
