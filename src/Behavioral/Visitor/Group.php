<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class Group implements Role
{

    public function name(): string
    {
        return 'Group name';
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitGroup($this);
    }
}
