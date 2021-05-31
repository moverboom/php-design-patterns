<?php

declare(strict_types=1);

namespace Tests\Creational\Builder;

use Creational\Builder\HtmlPageBuilder;
use Creational\Builder\PageDirector;
use Creational\Builder\PlainTextPageBuilder;
use PHPUnit\Framework\TestCase;

final class PageBuilderTest extends TestCase
{
    /** @test */
    public function it_builds_html_page(): void
    {
        $builder = new HtmlPageBuilder();
        $director = new PageDirector($builder);
        $director->create();
        $page = $builder->result();
        $result = $page->render();

        self::assertSame(
            <<<HTML
            <html>
            <title>Page title</title>
            <body>
            <h1>Created using Builder pattern.</h1>
            <p>Html or plain text</p>
            <footer>Works great</footer>
            </body>
            </html>
            HTML,
            $result
        );
    }

    /** @test */
    public function it_builds_plain_text_page(): void
    {
        $builder = new PlainTextPageBuilder();
        $director = new PageDirector($builder);
        $director->create();
        $page = $builder->result();
        $result = $page->render();

        self::assertSame(
            <<<PLAIN
            Page title
            Created using Builder pattern.
            Html or plain text
            Works great
            PLAIN,
            $result
        );
    }
}
