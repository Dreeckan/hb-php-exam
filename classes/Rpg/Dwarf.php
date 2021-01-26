<?php

namespace Rpg;

class Dwarf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name)
        $this->setLifePoints(100);
        $this->setStrength(15);
    }
}