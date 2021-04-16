<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder;

final class PlainTextPageBuilder extends PageBuilder
{
    private PlainTextPage $plainTextPage;

    public function __construct()
    {
        $this->plainTextPage = new PlainTextPage();
    }

    public function setTitle(string $title): void
    {
        $this->plainTextPage->setTitle($title);
    }

    public function setHeading(string $heading): void
    {
        $this->plainTextPage->setHeading($heading);
    }

    public function setText(string $text): void
    {
        $this->plainTextPage->setText($text);
    }

    public function setFooter(string $footer): void
    {
        $this->plainTextPage->setFooter($footer);
    }

    public function result(): PlainTextPage
    {
        return $this->plainTextPage;
    }
}
