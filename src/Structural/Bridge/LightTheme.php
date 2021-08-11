<?php

declare(strict_types=1);

namespace Structural\Bridge;

final class LightTheme implements Theme
{
    public function color(): string
    {
        return 'light';
    }
}
