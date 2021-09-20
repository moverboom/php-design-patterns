<?php

declare(strict_types=1);

namespace Structural\Proxy;

use PHPUnit\Framework\TestCase;

final class ProxyTest extends TestCase
{
    /** @test */
    public function it_proxies(): void
    {
        $logger = new Logger();
        $file = new AuditLoggedFile(
            'sensitive.csv',
            $logger
        );

        self::assertSame(
            "Actual file contents of sensitive.csv",
            $file->open()
        );
        self::assertSame(
            "Access granted to sensitive.csv",
            $logger->read()
        );
    }
}
