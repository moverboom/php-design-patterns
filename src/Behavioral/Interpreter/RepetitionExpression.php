<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class RepetitionExpression implements Expression
{
    public function __construct(private Expression $expression)
    {
    }

    public function match(Context $context): bool
    {
        $match = $this->expression->match($context);
        if ($match) {
            return $this->match($context);
        }

        return false;
    }
}
