<?php

namespace Rpg;

class Elf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->lifePoints = 75;
        $this->strength = 17;
    }
}