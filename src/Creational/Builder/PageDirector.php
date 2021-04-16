<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder;

final class PageDirector
{
    public function __construct(private PageBuilder $pageBuilder)
    {
    }

    public function create(): void
    {
        $this->pageBuilder->setTitle('Page title');
        $this->pageBuilder->setHeading('Created using Builder pattern.');
        $this->pageBuilder->setText('It can create multiple kinds of pages');
        $this->pageBuilder->setText('Html or plain text');
        $this->pageBuilder->setFooter('Works great');
    }
}
