<?php

namespace Rpg;

use Rpg\AbstractCharacter;

class Dwarf extends AbstractCharacter
{
    /**
     * @var int
     */
    public $strength = 15;

    /**
     * @var int
     */
    public $lifePoints = 100;

    public function __construct($name)
    {
        parent::__construct($name);
    }
}
