<?php

namespace RPG;

class Elf extends AbstractCharacter
{
    public function __construct__(string $name, int $strength, int $lifePoints)
    {
        parent::__construct__($name);
        $this->strength = 17;
        $this->lifePoints = 75;
    }
}
