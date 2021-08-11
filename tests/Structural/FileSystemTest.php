<?php

declare(strict_types=1);

namespace Structural;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\DownloadableFile;
use Structural\Adapter\FileSystem;
use Structural\Adapter\LocalFile;
use Structural\Adapter\RemoteFile;

final class FileSystemTest extends TestCase
{
    /** @test */
    public function it_iterates(): void
    {
        $expected = ['LOCAL FILE', 'REMOTE FILE'];
        $fileSystem = new FileSystem([
            new LocalFile(),
            new RemoteFile(
                new DownloadableFile()
            )
        ]);

        self::assertSame(
            $expected,
            iterator_to_array($fileSystem->iterateDir())
        );
    }
}
