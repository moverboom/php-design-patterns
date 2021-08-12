<?php

declare(strict_types=1);

namespace Structural\Decorator;

use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    /** @test */
    public function it_decorates(): void
    {
        $component = new UpperCaseWordsDecorator(
            new ExclamationMarkDecorator(
                new SimpleTextTextComponent('A simple text component')
            )
        );

        self::assertSame(
            'A Simple Text Component!',
            $component->render()
        );
    }
}
