<?php

namespace Rpg;

class Dwarf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->lifePoints = 100;
        $this->strength = 15;
    }
}