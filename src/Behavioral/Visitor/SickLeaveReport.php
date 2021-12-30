<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

final class SickLeaveReport implements Visitor
{
    public function visitStudent(Student $student): array
    {
        return $student->sickLeaves();
    }

    public function visitUniversity(University $university): array
    {
        $totalSickLeaves = [];
        /** @var Student $student */
        foreach ($university->students() as $student) {
            $totalSickLeaves = array_merge($totalSickLeaves, $student->sickLeaves());
        }

        return $totalSickLeaves;
    }
}
