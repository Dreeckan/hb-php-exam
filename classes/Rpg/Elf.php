<?php

namespace Rpg;

class Elf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->strength = 17;
        $this->lifePoints = 75;
    }
}
