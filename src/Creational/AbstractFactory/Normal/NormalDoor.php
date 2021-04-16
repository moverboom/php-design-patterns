<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Normal;

use Patterns\Creational\AbstractFactory\Door;

final class NormalDoor extends Door
{
    public function enter(): void
    {
        //do something
    }
}
