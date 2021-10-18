<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class Context
{
    public function __construct(
        public string $subject,
        public int $position
    )
    {
    }

    public static function initialize(string $subject): self
    {
        return new self($subject, 0);
    }
}
