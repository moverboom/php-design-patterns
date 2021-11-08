<?php

declare(strict_types=1);

namespace Behavioral\Observer;

final class Order
{
    /**
     * @var OrderObserver[]
     */
    private array $observers = [];

    /**
     * @var Product[]
     */
    private array $products = [];

    protected function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

    public function addObserver(OrderObserver $observer): void
    {
        $observer->setOrder($this);
        $this->observers[$observer->id()] = $observer;
    }

    public function removeObserver(OrderObserver $observer): void
    {
        if (isset($this->observers[$observer->id()])) {
            unset($this->observers[$observer->id()]);
        }
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->notify();
    }

    public function products(): array
    {
        return $this->products;
    }
}
