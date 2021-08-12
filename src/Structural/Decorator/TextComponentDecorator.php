<?php

declare(strict_types=1);

namespace Structural\Decorator;

abstract class TextComponentDecorator implements TextComponent
{
    public function __construct(protected TextComponent $textComponent)
    {
    }
}
