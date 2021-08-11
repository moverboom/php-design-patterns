<?php

declare(strict_types=1);

namespace Structural\Bridge;

final class DarkTheme implements Theme
{
    public function color(): string
    {
        return 'dark';
    }
}
