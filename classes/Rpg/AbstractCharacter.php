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

    // constructeur prenant en paramètre le nom du personnage et le mettant dans la propriété name de l'objet

    public function __construct($name)
    {
        $this->name = $name;
    }

    // renvoie le contenu de la propriété `name`

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    // renvoie le contenu de la propriété `lifePoints`

    /**
     * @return int
     */
    public function getLifePoints():int
    {
        return $this->lifePoints;
    }

    /**
     * @return bool
     */
    public function hasSurrendered():bool
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
     * @param AbstractCharacter
     */
    public function attack(AbstractCharacter $abstractCharacter)
    {
        $number = rand(1, 20);
        if ($number <= $this->strength) {
            $abstractCharacter->takeHit($this->strength);
        } else {
            $number = 0;
        }
        return $number;
    }
}
