<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

interface ChatRoom
{
    public function send(Message $message): void;
}
