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

    public function __construct()
    {
        $this->Strength(0);
        $this->setLifePoints(0);
    }

    public function getStregth()
    {
        return $this->strength;
    }

    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    public function getlifePoints()
    {
        return $this->lifePoints;
    }

    public function setLifePoints($lifePoints)
    {
        $this->lifePoints = $lifePoints;
    }
    
    public function hasSurrendered()
    {
        if ($this->lifePoints() < 10)
        return true;
    } else {
        return false;
    }

    public function takeHit($persoQuiFrappe)
    {
        $this->lifePoints -= $persoQuiFrappe->strength;
        hasSurrendered();
    }

    public function attack($persoAFrapper)
    {
        if (mt_rand ( 1 , 20 ) < $this->strength) {
            takeHit($persoAFrapper);
            $damage = $this->strength;
            return $damage;
        } else {
            $damage = 0;
            return $damage;
        }
    }
} 