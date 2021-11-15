<?php

declare(strict_types=1);

namespace Behavioral\State;

final class ConnectionClosed extends ConnectionState
{
    public function open(): void
    {
        $this->connection->changeState(new ConnectionOpened($this->connection));
    }

    public function close(): void
    {
        throw new \LogicException("Can't close already closed connection");
    }

    public function read(): string
    {
        throw new \LogicException("Can't read a closed connection");
    }
}
