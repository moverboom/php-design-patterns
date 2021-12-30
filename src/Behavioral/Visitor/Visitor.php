<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

interface Visitor
{
    public function visitUser(User $user): void;

    public function visitGroup(Group $group): void;
}
