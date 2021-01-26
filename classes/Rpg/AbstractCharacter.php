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
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     * @return  self
     */
    public function setName(string $name): AbstractCharacter
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of strength
     *
     * @param string $strength
     * @return  self
     */
    public function setStrength(string $strength): AbstractCharacter
    {
        $this->strength = $strength;

        return $this;
    }

    public function attack(AbstractCharacter $character): int
    {
        $dice = rand(1, 20);
        if ($dice <= $this->strength) {
            $character->takeHit($this->strength);
        } else {
            $dice = 0;
        }
        return $dice;
    }


    public function takeHit(int $strength): bool
    {
        $this->lifePoints = $this->lifePoints - $strength;
        return $this->hasSurrendered();
    }

    public function hasSurrendered(): bool
    {
        if ($this->lifePoints < 10) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the value of lifePoints
     */

    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * Set the value of lifePoints
     *
     * @param $lifePoints
     * @return  self
     */
    public function setLifePoints($lifePoints): AbstractCharacter
    {
        $this->lifePoints = $lifePoints;

        return $this;
    }

}