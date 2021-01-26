<?php

namespace RPG;

class Dwarf extends AbstractCharacter
{
    public function __construct__(string $name, int $strength, int $lifePoints)
    {
        parent::__construct__($name);
        $this->strength = 15;
        $this->lifePoints = 100;
    }
}
