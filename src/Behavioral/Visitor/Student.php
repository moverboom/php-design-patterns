<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class Student implements Visitable
{
    public function __construct(private string $name, private array $sickLeaves = [])
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function sickLeaves(): array
    {
        return $this->sickLeaves;
    }

    public function accept(Visitor $visitor): array
    {
        return $visitor->visitStudent($this);
    }
}
