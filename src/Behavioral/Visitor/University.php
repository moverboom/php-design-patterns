<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class University implements Visitable
{
    public function __construct(private string $name, private array $students)
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function students(): array
    {
        return $this->students;
    }

    public function accept(Visitor $visitor): array
    {
        return $visitor->visitUniversity($this);
    }
}
