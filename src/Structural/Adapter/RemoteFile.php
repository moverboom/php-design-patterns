<?php

declare(strict_types=1);

namespace Structural\Adapter;

/**
 * This class then adapts around the already existing RemoteFile, allowing it to integrate all functionality into the system.
 */
final class RemoteFile implements File
{
    public function __construct(private DownloadableFile $remoteFile)
    {
    }

    public function open(): string
    {
        return $this->remoteFile->download();
    }
}
