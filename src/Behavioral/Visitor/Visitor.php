<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

interface Visitor
{
    public function visitStudent(Student $student): array;

    public function visitUniversity(University $university): array;
}
