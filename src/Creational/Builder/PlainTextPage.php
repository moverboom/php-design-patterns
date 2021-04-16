<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder;

final class PlainTextPage
{
    private string $title = "";
    private string $heading = "";
    private string $text = "";
    private string $footer = "";

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setHeading(string $heading): void
    {
        $this->heading = $heading;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setFooter(string $footer): void
    {
        $this->footer = $footer;
    }

    public function render(): string
    {
        $page = "";
        $page .= $this->title . "\n";
        $page .= $this->heading . "\n";
        $page .= $this->text . "\n";
        $page .= $this->footer;

        return $page;
    }
}
