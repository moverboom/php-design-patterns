<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

final class Message
{
    public function __construct(private string $content, private User $sender)
    {
    }

    public function content(): string
    {
        return $this->content;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
