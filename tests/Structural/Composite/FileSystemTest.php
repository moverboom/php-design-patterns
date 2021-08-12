<?php

declare(strict_types=1);

namespace Structural\Composite;

use PHPUnit\Framework\TestCase;

final class FileSystemTest extends TestCase
{
    /** @test */
    public function it_iterates(): void
    {
        $fileSystem = new FileSystem(
            new Directory([
                new File(),
                new Directory([
                    new File(),
                    new Directory([
                        new File(),
                        new File(),
                    ])
                ]),
                new File(),
            ])
        );


        self::assertSame(
            [
                ['file'],
                [
                    ['file'],
                    [
                        ['file'],
                        ['file']
                    ]
                ],
                ['file']
            ],
            $fileSystem->list()
        );
    }
}
