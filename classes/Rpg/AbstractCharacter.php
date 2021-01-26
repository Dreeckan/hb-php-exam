<?php

namespace Rpg;

abstract class AbstractCharacter
{
    /**
    * @var string
    * */
    protected $name;
    
    /**
    * @var int
    * */
    protected $strength;

    /**
    * @var int
    * */
    protected $lifePoints;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hasSurrendered()
    {
        if ($this->lifePoints() < 10) {
            return true;
        } else {
            return false;
        }
    }

    public function takeHit(abstractCharacter $defenseur)
    {
        $this->lifePoints -= $damage;
        hasSurrendered();
    }

    public function attack(AbstractCharacter $defenseur)
    {
        if (mt_rand ( 1 , 20 ) < $this->strength) {
            
            $damage = $this->strength;
            takeHit($defenseur);
            return $damage;
        } else {
            $damage = 0;
            return $damage;
        }
    }
} 