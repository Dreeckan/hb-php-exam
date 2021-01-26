<?php

namespace Rpg;

use Rpg\AbstractCharacter;

class Elf extends AbstractCharacter
{
    /**
     * @var int
     */
    public $strength = 17;

    /**
     * @var int
     */
    public $lifePoints = 75;

    public function __construct($name)
    {
        parent::__construct($name);
    }
}
