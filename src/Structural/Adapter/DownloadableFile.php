<?php

declare(strict_types=1);

namespace Structural\Adapter;

/**
 * Assume that this would be an already existing class provided by, for example, a composer package.
 */
final class DownloadableFile
{
    public function download(): string
    {
        return 'REMOTE FILE';
    }
}
