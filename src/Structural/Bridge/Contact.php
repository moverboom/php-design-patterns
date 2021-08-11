<?php

declare(strict_types=1);

namespace Structural\Bridge;

final class Contact extends WebPage
{
    public function render(): string
    {
        return 'Contact page in ' . $this->theme->color();
    }
}
