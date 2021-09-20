<?php

declare(strict_types=1);

namespace Structural\Proxy;

final class AuditLoggedFile implements File
{
    /*
     * A difference with the decorator pattern is that, a decorator is passed
     * its delegate as an argument, effectively chaining them.
     * A proxy can create the target object by itself.
     */
    public function __construct(private string $fileName, private Logger $logger)
    {
    }

    public function open(): string
    {
        //Forwards requests to the proxies object.
        $this->logger->log('Access granted to ' . $this->fileName);
        return (new LocalFile($this->fileName))->open();
    }
}
