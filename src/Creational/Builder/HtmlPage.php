<?php

declare(strict_types=1);

namespace Creational\Builder;

final class HtmlPage
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
        $page = "<html>\n";
        $page .= "<title>{$this->title}</title>\n";
        $page .= "<body>\n";
        $page .= "<h1>{$this->heading}</h1>\n";
        $page .= "<p>{$this->text}</p>\n";
        $page .= "<footer>{$this->footer}</footer>\n";
        $page .= "</body>\n";
        $page .= "</html>";

        return $page;
    }
}
