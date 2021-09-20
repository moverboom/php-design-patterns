<?php

declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

use PHPUnit\Framework\TestCase;

final class AccountTest extends TestCase
{
    /** @test */
    public function it_can_handle(): void
    {
        $account = new Account(100.00);
        $secondAccount = new Account(250.00);
        $savingAccount = new Account(1000.00);
        $account->setNext($secondAccount);
        $secondAccount->setNext($savingAccount);

        $account->pay(150.00);

        self::assertSame(100.00, $secondAccount->balance());
    }

    /** @test */
    public function it_throws_when_unable_to_handle(): void
    {
        $this->expectException(\RuntimeException::class);
        $account = new Account(100.00);
        $secondAccount = new Account(250.00);
        $savingAccount = new Account(1000.00);
        $account->setNext($secondAccount);
        $secondAccount->setNext($savingAccount);

        $account->pay(1050.00);
    }
}
