<?php

declare(strict_types=1);

namespace Structural\Flyweight;

use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    /** @test */
    public function it_renders(): void
    {
        //Ideally something like a range would be better here, because this way there is still one
        //Layout object for each position. But the implementation is about reducing the amount of Character objects,
        //which worked. So lets just assume this is stored more efficiently for the sake of the example
        $context = new Context();
        $context->setLayout(new UpperCase(), 0);
        $context->setLayout(new LowerCase(), 1);
        $context->setLayout(new LowerCase(), 2);
        $context->setLayout(new UpperCase(), 3);
        $context->setLayout(new UpperCase(), 4);

        $chars = [];
        $factory = new CharacterFactory();
        for ($i = 0; $i < 5; $i++) {
            $chars[] = $factory->createCharacter('a');
        }

        //Test object equality
        $expectedChar = $factory->createCharacter('a');
        self::assertEquals(
            $expectedChar,
            $factory->createCharacter('a')
        );

        //Test render with layout
        self::assertSame(
            0,
            $context->current()
        );
        self::assertSame(
            'A',
            $factory->createCharacter('a')->render($context)
        );
        $context->next();

        self::assertSame(
            1,
            $context->current()
        );
        self::assertSame(
            'a',
            $factory->createCharacter('a')->render($context)
        );
        $context->next();

        self::assertSame(
            2,
            $context->current()
        );
        self::assertSame(
            'a',
            $factory->createCharacter('a')->render($context)
        );
        $context->next();

        self::assertSame(
            3,
            $context->current()
        );
        self::assertSame(
            'A',
            $factory->createCharacter('a')->render($context)
        );
        $context->next();

        self::assertSame(
            4,
            $context->current()
        );
        self::assertSame(
            'A',
            $factory->createCharacter('a')->render($context)
        );
    }
}
