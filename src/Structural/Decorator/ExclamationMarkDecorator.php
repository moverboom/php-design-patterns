<?php

declare(strict_types=1);

namespace Structural\Decorator;

final class ExclamationMarkDecorator extends TextComponentDecorator
{
    public function render(): string
    {
        return $this->textComponent->render() . '!';
    }
}
