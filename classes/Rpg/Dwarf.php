<?php

namespace Rpg;

class Dwarf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->strength = 15;
        $this->lifePoints = 100;
    }
}
