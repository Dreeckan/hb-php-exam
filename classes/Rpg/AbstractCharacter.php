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

    public function __construct(string $name)
    {
        return $this->setName($name);
    }

    /**
     * Récupérer la valeur de name
     */

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Établir la valeur de name
     *
     * @return self
     */

    public function setName(string $name): AbstractCharacter
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Établir la valeur de strength
     *
     * @return self
     */

    public function setStrength($strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * Récupérer la valeur de lifePoints
     */


    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * Établir la valeur de lifePoints
     *
     * @return self
     */


    public function setLifePoints($lifePoints)
    {
        $this->lifePoints = $lifePoints;

        return $this;
    }

    public function hasSurrendered(): bool
    {
        if ($this->getLifePoints() < 10) {
            return true;
        } else {
            return false;
        }
    }

    public function takeHit(int $strength): bool
    {
        $this->lifePoints = $this->lifePoints - $strength;
        return $this->hasSurrendered();
    }

    public function attack(AbstractCharacter $character)
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
