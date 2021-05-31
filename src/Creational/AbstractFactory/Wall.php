<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

abstract class Wall extends MapSite
{
    abstract public function enter(): void;
}
