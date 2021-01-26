<?php

namespace Rpg;

abstract class AbstractCharacter
{
    /** @var string */
    protected $name;

    /** @var int */
    protected $strength;

    /** @var int */
    protected $lifePoints;

    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    public function attack(AbstractCharacter $character): int
    {
        $dice = rand(1, 20);

        if ($dice <= $this->strength) {
            $character->takeHit($this->strength);
            return $this->strength;
        }

        return 0;
    }

    /**
     * @return bool
     */
    public function hasSurrendered(): bool
    {
        return $this->getLifePoints() < 10;
    }

    /**
     * @param int $strength
     *
     * @return bool
     */
    public function takeHit(int $strength = 0): bool
    {
        $this->lifePoints -= $strength;

        return $this->hasSurrendered();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }
}