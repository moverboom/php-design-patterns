<?php

declare(strict_types=1);

namespace Behavioral\Observer;

final class OrderDisplay extends OrderObserver
{
    private string $orderDisplay = '';

    public function notify(): void
    {
        $this->orderDisplay = '';
        foreach ($this->order->products() as $product) {
            $this->orderDisplay .= "{$product->name()} - {$product->price()}\n";
        }
    }

    public function display(): string
    {
        return $this->orderDisplay;
    }
}
