<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class User implements Role
{

    public function name(): string
    {
        return 'Username';
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitUser($this);
    }
}
