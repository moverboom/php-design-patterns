<?php

declare(strict_types=1);

namespace Creational\Singleton;

use PHPUnit\Framework\TestCase;

final class SunTest extends TestCase
{
    /** @test */
    public function it_can_only_create_one_sun(): void
    {
        $sun = Sun::instance();

        self::assertEquals($sun, Sun::instance());
    }
}
