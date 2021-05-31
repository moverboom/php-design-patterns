<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

use MabeEnum\Enum;

/**
 * @method static static NORTH()
 * @method static static EAST()
 * @method static static SOUTH()
 * @method static static WEST()
 */
final class Direction extends Enum
{
    public const NORTH = 'n';
    public const EAST = 'e';
    public const SOUTH = 's';
    public const WEST = 'w';
}
