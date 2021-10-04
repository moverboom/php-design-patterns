<?php

declare(strict_types=1);

namespace Behavioral\Command;

use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    /** @test */
    public function it_handles(): void
    {
        $controls = new EngineControls();
        $engine = new Engine();

        $start = new StartEngine($engine);
        $controls->handle($start);
        self::assertSame(
            'running',
            $engine->state()
        );

        $stop = new StopEngine($engine);
        $controls->handle($stop);
        self::assertSame(
            'off',
            $engine->state()
        );
    }
}
