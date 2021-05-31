<?php

declare(strict_types=1);

namespace Creational\Builder;

final class Client
{
    public function run(): void
    {
        $builder = new HtmlPageBuilder();
        $director = new PageDirector($builder);
        $director->create();
        $page = $builder->result();
        $result = $page->render();
        printf($result);
    }
}
