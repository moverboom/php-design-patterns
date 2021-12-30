<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class RecordingVisitor implements Visitor
{
    private array $visited = [];

    public function visitUser(User $user): void
    {
        /**
         * The visitor performs the operations relevant to each object here
         */
        $this->visited[] = $user->name();
    }

    public function visitGroup(Group $group): void
    {
        $this->visited[] = $group->name();
    }

    public function visited(): array
    {
        return $this->visited;
    }
}
