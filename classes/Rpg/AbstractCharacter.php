<?php

namespace RPG;

abstract class AbstractCharacter
{
    /*
    @var string
    */
    protected $name;
    /*
    @var int
    */
    protected $strength;
    /*
    @var int
    */
    protected $lifePoints;



    public function __construct__(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getLifePoints()
    {
        return $this->$lifePoints;
    }

    public function hasSurrendered()
    {
        return $lifePoints < 10 ? true : false;
    }

    public function takeHit(int $strength)
    {
        $this->lifePoints -= $strength;
        return $this->hasSurrendered();
    }

    public function attack(AbstractCharacter $character)
    {
        $dice = rand(1, 20);
        if ($dice <= $character->strength) {
            $this->takeHit($character->strength);
        }

        return $character->strength;
    }
}
