<?php

declare(strict_types=1);

namespace Behavioral\Observer;

final class OrderTotalCalculator extends OrderObserver
{
    private int $orderTotal = 0;

    public function notify(): void
    {
        $this->orderTotal = 0;
        foreach ($this->order->products() as $product) {
            $this->orderTotal += $product->price();
        }
    }

    public function orderTotal(): int
    {
        return $this->orderTotal;
    }
}
