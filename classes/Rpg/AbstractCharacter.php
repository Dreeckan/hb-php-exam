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

    protected $lifePoints;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Récupérer la valeur de name
     */

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Récupérer la valeur de lifePoints
     */


    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * @return bool
     */

    public function hasSurrendered(): bool
    {
        if ($this->getLifePoints() < 10) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $strength
     */

    public function takeHit(int $strength)
    {
        $this->lifePoints -= $strength;
        return $this->hasSurrendered();
    }

    /**
     * @param object
     */

    public function attack(object $character)
    {
        $alea = rand(1, 20);
        if ($alea <= $this->strength) {
            $character->takeHit($this->strength);
        } else {
            $alea = 0;
        }
        return $alea;
    }
}
