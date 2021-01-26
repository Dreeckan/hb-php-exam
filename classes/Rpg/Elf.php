<?php

namespace Rpg;

class Elf extends AbstractCharacter
{
    public function __construct()
    {
        parent::__construct($name)
        $this->lifePoints = 75;
        $this->strength = 17;
    }
}