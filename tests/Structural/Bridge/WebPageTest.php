<?php

declare(strict_types=1);

namespace Structural\Bridge;

use PHPUnit\Framework\TestCase;

final class WebPageTest extends TestCase
{
    /** @test */
    public function it_uses_theme(): void
    {
        $page = new About(new DarkTheme());
        self::assertSame(
            'About page in dark',
            $page->render()
        );

        $page = new Contact(new LightTheme());
        self::assertSame(
            'Contact page in light',
            $page->render()
        );
    }
}
