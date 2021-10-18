<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class AlternationExpression implements Expression
{
    /**
     * @param array<Expression> $expressions
     */
    public function __construct(private array $expressions)
    {
    }

    public function match(Context $context): bool
    {
        foreach ($this->expressions as $expression) {
            if ($expression->match($context)) {
                return true;
            }
        }

        return false;
    }
}
