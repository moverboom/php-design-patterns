<?php

declare(strict_types=1);

namespace Structural\Bridge;

abstract class WebPage
{
    public function __construct(protected Theme $theme)
    {
    }

    abstract public function render(): string;
}
