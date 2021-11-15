<?php

declare(strict_types=1);

namespace Behavioral\State;

final class ConnectionOpened extends ConnectionState
{
    public function open(): void
    {
        throw new \LogicException("Can't open already opened connection");
    }

    public function close(): void
    {
        $this->connection->changeState(new ConnectionClosed($this->connection));
    }

    public function read(): string
    {
        return "Connection is open";
    }
}
