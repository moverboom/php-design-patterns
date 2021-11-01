<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

final class User
{
    private ChatRoom $chatRoom;

    /** @var string[] */
    private array $receivedMessages = [];

    public function __construct(private string $name)
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function setChatRoom(ChatRoom $chatRoom): void
    {
        $this->chatRoom = $chatRoom;
    }

    public function receive(Message $message): void
    {
        $this->receivedMessages[] = $message;
    }

    public function showMessages(): array
    {
        $timestamp = '2021-11-01 16:08'; //Fixed datetime here to make testing easier

        $rendered = [];
        /** @var Message $receivedMessage */
        foreach ($this->receivedMessages as $receivedMessage) {
            $name = $receivedMessage->sender()->name();
            $name = $name === $this->name ? 'You' : $receivedMessage->sender()->name();
            $rendered[] = "$name - $timestamp: {$receivedMessage->content()}";
        }

        return $rendered;
    }

    public function send(string $message): void
    {
        $this->chatRoom->send(new Message($message, $this));
    }
}
