<?php

declare(strict_types=1);

namespace Structural\Bridge;

final class About extends WebPage
{
    public function render(): string
    {
        return 'About page in ' . $this->theme->color();
    }
}
