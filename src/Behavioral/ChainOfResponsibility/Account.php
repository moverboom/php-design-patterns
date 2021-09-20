<?php

declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

final class Account
{
    private ?Account $next = null;

    public function __construct(private float $balance)
    {
    }

    public function setNext(Account $account): void
    {
        $this->next = $account;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    public function pay(float $amount): void
    {
        if ($this->canPay($amount)) {
            $this->balance -= $amount;
        } elseif ($this->next) {
            $this->next->pay($amount);
        } else {
            throw new \RuntimeException('Insufficient balance');
        }
    }

    private function canPay(float $amount): bool
    {
        return $this->balance >= $amount;
    }
}
