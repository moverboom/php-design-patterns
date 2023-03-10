<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

use PHPUnit\Framework\TestCase;

final class InterpreterTest extends TestCase
{
    /** @test */
    public function it_interprets_full(): void
    {
        // $tree = Parser::parse("aa & (AA & BB) & (CC | DD)")
        // $success = $tree->match(Context::initialize('aaAAbbDD'))
        
        $tree = new SequenceExpression([
            new LiteralExpression('aa'),
            new SequenceExpression([
                new LiteralExpression('AA'),
                new LiteralExpression('bb')
            ]),
            new AlternationExpression([
                new LiteralExpression('CC'),
                new LiteralExpression('DD')
            ])
        ]);

        $context = Context::initialize('aaAAbbDD');
        $matched = $tree->match($context);

        self::assertTrue($matched);
    }

    /** @test */
    public function it_interprets_partly(): void
    {
        $tree = new SequenceExpression([
            new LiteralExpression('aa'),
            new SequenceExpression([
                new LiteralExpression('AA'),
                new LiteralExpression('bb')
            ]),
            new AlternationExpression([
                new LiteralExpression('CC'),
                new LiteralExpression('DD')
            ])
        ]);

        $context = Context::initialize('aaAAbbEE');
        $matched = $tree->match($context);

        self::assertFalse($matched);
        self::assertSame(6, $context->position);
    }
}
