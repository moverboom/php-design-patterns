<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

interface Visitable
{
    public function accept(Visitor $visitor): array;
}
