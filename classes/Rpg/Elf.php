<?php

namespace Rpg;

class Elf extends AbstractCharacter
{

    public function __construct($name)
    {
        $this->setStrength(17);
        $this->setLifePoints(75);
        parent::__construct($name);
    }
}