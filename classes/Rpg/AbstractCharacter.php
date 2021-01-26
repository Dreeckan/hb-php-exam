<?php
declare(strict_types=1);

namespace Rpg;

//Une classe abstraite est une classe "signature" qui sert à créer d'autres classes qui hériteront de ses caractéristiques, cette classe ne peut pas être instanciée.
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of lifePoints
     */
    public function getLifePoints()
    {
        return $this->lifePoints;
    }

    /**
     * Get the value of strength
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of lifePoints
     *
     * @return self
     */
    public function setLifePoints($lifePoints)
    {
        $this->lifePoints = $lifePoints;
    }

    /**
     * Set the value of strength
     *
     * @return self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    public function hasSurrendered()
    {
        if ($this->lifePoints < 10) {
            return true;
        } else {
            return false;
        }
    }

    public function takeHit(int $strength)
    {
        return $this->lifePoints - $strength;
        
        $this->hasSurrendered();
    }

    public function attack(AbstractCharacter $opponent)
    {
        $randomNumber = rand(1, 20);

        if ($randomNumber <= $this->strength) {
            $damage = $opponent->takeHit($this->strength);

            return $damage;
        }
    }
}
