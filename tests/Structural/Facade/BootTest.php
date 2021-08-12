<?php

declare(strict_types=1);

namespace Structural\Facade;

use PHPUnit\Framework\TestCase;

final class BootTest extends TestCase
{
    /** @test */
    public function it_boots(): void
    {
        $boot = new Boot();

        self::assertTrue(
            $boot->boot()
        );
    }
}
