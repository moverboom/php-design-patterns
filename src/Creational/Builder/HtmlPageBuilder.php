<?php

declare(strict_types=1);

namespace Creational\Builder;

final class HtmlPageBuilder extends PageBuilder
{
    private HtmlPage $htmlPage;

    public function __construct()
    {
        $this->htmlPage = new HtmlPage();
    }

    public function setTitle(string $title): void
    {
        $this->htmlPage->setTitle($title);
    }

    public function setHeading(string $heading): void
    {
        $this->htmlPage->setHeading($heading);
    }

    public function setText(string $text): void
    {
        $this->htmlPage->setText($text);
    }

    public function setFooter(string $footer): void
    {
        $this->htmlPage->setFooter($footer);
    }

    public function result(): HtmlPage
    {
        return $this->htmlPage;
    }
}
