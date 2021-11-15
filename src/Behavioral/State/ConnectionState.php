<?php

declare(strict_types=1);

namespace Behavioral\State;

abstract class ConnectionState
{
    public function __construct(protected Connection $connection)
    {
    }

    abstract public function open(): void;

    abstract public function close(): void;

    abstract public function read(): string;

    protected function changeState(ConnectionState $state): void
    {
        $this->connection->changeState($state);
    }
}
