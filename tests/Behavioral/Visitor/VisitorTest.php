<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    /** @test */
    public function it_visits(): void
    {
        $visitor = new SickLeaveReport();
        $student1 = new Student('student1', ['2021-01-01', '2021-02-01']);
        $student2 = new Student('student2', ['2021-07-01', '2021-08-01']);
        $university = new University('University1', [$student1, $student2]);

        $report = $university->accept($visitor);

        self::assertSame(
            [
                '2021-01-01',
                '2021-02-01',
                '2021-07-01',
                '2021-08-01',
            ],
            $report
        );
    }
}
