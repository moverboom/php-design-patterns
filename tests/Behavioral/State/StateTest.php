<?php

declare(strict_types=1);

namespace Behavioral\State;

use PHPUnit\Framework\TestCase;

final class StateTest extends TestCase
{
    /** @test */
    public function it_can_change_state(): void
    {
        $connection = new Connection();
        $connection->open();
        self::assertSame(
            'Connection is open',
            $connection->read()
        );

        $connection->close();
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage("Can't read a closed connection");
        $connection->read();
    }
}
