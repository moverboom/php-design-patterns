<?php

declare(strict_types=1);

namespace Structural\Flyweight;

final class CharacterFactory
{
    private array $characters = [];

    public function createCharacter(string $char): Character
    {
        if (!isset($this->characters[$char])) {
            $this->characters[$char] = new Character($char);
        }

        return $this->characters[$char];
    }
}
