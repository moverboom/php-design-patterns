<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

use PHPUnit\Framework\TestCase;

final class MediatorTest extends TestCase
{
    /** @test */
    public function it_mediates(): void
    {
        $chatRoom = new IrcChatRoom();
        $john = new User('John Doe');
        $jane = new User('Jane Doe');
        $chatRoom->addUser($jane);
        $chatRoom->addUser($john);

        $john->send('Hi Jane!');
        $john->send('How was your weekend?');
        $jane->send('Hi John, my weekend was great. Yours?');
        $jane->send('Kinda quit with just the two of us here, isn\'t it');

        self::assertSame(
            [
                'John Doe - 2021-11-01 16:08: Hi Jane!',
                'John Doe - 2021-11-01 16:08: How was your weekend?',
                'You - 2021-11-01 16:08: Hi John, my weekend was great. Yours?',
                'You - 2021-11-01 16:08: Kinda quit with just the two of us here, isn\'t it',
            ],
            $jane->showMessages()
        );
        self::assertSame(
            [
                'You - 2021-11-01 16:08: Hi Jane!',
                'You - 2021-11-01 16:08: How was your weekend?',
                'Jane Doe - 2021-11-01 16:08: Hi John, my weekend was great. Yours?',
                'Jane Doe - 2021-11-01 16:08: Kinda quit with just the two of us here, isn\'t it',
            ],
            $john->showMessages()
        );
    }
}
