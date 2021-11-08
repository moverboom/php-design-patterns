<?php

declare(strict_types=1);

namespace Behavioral\Observer;

abstract class OrderObserver
{
    private string $id;

    protected Order $order;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    public function __destruct()
    {
        $this->order->removeObserver($this);
    }

    abstract public function notify(): void;

    public function id(): string
    {
        return $this->id;
    }
}
