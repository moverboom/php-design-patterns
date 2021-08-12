<?php

declare(strict_types=1);

namespace Structural\Decorator;

final class UpperCaseWordsDecorator extends TextComponentDecorator
{
    public function render(): string
    {
        return ucwords($this->textComponent->render());
    }
}
