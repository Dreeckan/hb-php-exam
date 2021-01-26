<?php

namespace Rpg;

class Elf extends AbstractCharacter
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->strength = 17;
        $this->lifePoints = 75;
    }
}
