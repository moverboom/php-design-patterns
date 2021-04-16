<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Enchanted;

use Patterns\Creational\AbstractFactory\Door;

final class EnchantedDoor extends Door
{
    public function enter(): void
    {
        //do something
    }
}
