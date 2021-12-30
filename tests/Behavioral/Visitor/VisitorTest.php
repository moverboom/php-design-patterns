<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    /** @test */
    public function it_visits(): void
    {
        $visitor = new RecordingVisitor();
        $user = new User();
        $user->accept($visitor);
        $group = new Group();
        $group->accept($visitor);

        self::assertSame(
            [
                'Username',
                'Group name',
            ],
            $visitor->visited()
        );
    }
}
