<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

interface Expression
{
    public function match(Context $context): bool;
}
