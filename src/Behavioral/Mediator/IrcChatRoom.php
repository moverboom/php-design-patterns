<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

final class IrcChatRoom implements ChatRoom
{
    /** @var User[]  */
    private array $users = [];

    public function addUser(User $user): void
    {
        $user->setChatRoom($this);
        $this->users[] = $user;
    }

    public function send(Message $message): void
    {
        foreach ($this->users as $user) {
            $user->receive($message);
        }
    }
}
