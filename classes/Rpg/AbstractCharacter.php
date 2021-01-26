<?php
namespace Rpg;

abstract class AbstractCharacter
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $strength;

    /**
     * @var int
     */
    protected $lifePoint;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getLifePoint()
    {
        return $this->lifePoint;
    }
    public function hasSurrendered()
    {
        if ($this->lifePoint < 10) {
            return true;
        }
        return false;
    }
    public function takeHit(int $strength)
    {
        $this->lifePoint - $strength;
        return hasSurrendered();
    }
    public function attack()
    {
    }


    public function getStrength()
    {
        return $this->strength;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }
    public function setLifePoint($lifePoint)
    {
        $this->lifePoint = $lifePoint;
    }
}
