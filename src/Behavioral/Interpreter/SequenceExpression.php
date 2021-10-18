<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class SequenceExpression implements Expression
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
            $match = $expression->match($context);
            if (!$match) {
                return false;
            }
        }

        return true;
    }
}
