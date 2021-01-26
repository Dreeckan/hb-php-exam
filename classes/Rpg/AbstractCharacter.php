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
     * @param string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int
     */
    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * @param bool
     */
    public function hasSurrendered(): bool
    {
        return   $this->lifePoints < 10;
    }

    
    public function takeHit(int $strength): bool
    {
        $this->lifePoints - $strength;
        return $this->hasSurrendered();
    }

    public function attack(AbstractCharacter $charactere)
    {
        $de = rand(1, 20);
        if ($de <= $this->strength) {
            $charactere->takeHit($this->strength);
            return $this->strength;
        }
    }
}
