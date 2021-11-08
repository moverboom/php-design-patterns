<?php

declare(strict_types=1);

namespace Behavioral\Observer;

use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    /** @test */
    public function it_notifies_on_change(): void
    {
        $order = new Order();
        $orderTotalCalculator = new OrderTotalCalculator();
        $orderDisplay = new OrderDisplay();
        $order->addObserver($orderTotalCalculator);
        $order->addObserver($orderDisplay);

        $order->addProduct(new Product('Macbook Pro', 2500));

        self::assertSame($orderTotalCalculator->orderTotal(), 2500);
        self::assertSame($orderDisplay->display(), "Macbook Pro - 2500\n");

        $order->addProduct(new Product('Dell XPS', 2200));
        $order->addProduct(new Product('LG 24 inch display', 500));

        self::assertSame($orderTotalCalculator->orderTotal(), 5200);
        self::assertSame(
            $orderDisplay->display(),
            "Macbook Pro - 2500\n" .
            "Dell XPS - 2200\n" .
            "LG 24 inch display - 500\n"
        );
    }
}
