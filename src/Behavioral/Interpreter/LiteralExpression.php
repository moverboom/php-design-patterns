<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class LiteralExpression implements Expression
{
    public function __construct(private string $literal)
    {
    }

    public function match(Context $context): bool
    {
        $match = str_starts_with(
            substr(
                $context->subject,
                $context->position
            ),
            $this->literal
        );

        if (!$match) {
            return false;
        }

        $context->position += strlen($this->literal);

        return true;
    }
}
