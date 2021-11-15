<?php

declare(strict_types=1);

namespace Behavioral\State;

final class Connection
{
    private ConnectionState $state;

    public function __construct()
    {
        $this->state = new ConnectionClosed($this);
    }

    public function changeState(ConnectionState $state): void
    {
        $this->state = $state;
    }

    public function open(): void
    {
        $this->state->open();
    }

    public function close(): void
    {
        $this->state->close();
    }

    public function read(): string
    {
        return $this->state->read();
    }
}
