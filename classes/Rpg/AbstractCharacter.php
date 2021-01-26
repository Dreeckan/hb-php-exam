<?php
namespace Rpg;



abstract class AbstractCharacter{

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var int
     */
    protected $strength = 0;

    /**
     * @var int
     */
    protected $lifePoints = 0;

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of strength
     *
     * @return  int
     */ 
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     * @param  int  $strength
     *
     * @return  self
     */ 
    public function setStrength(int $strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of lifePoints
     *
     * @return  int
     */ 
    public function getLifePoints()
    {
        return $this->lifePoints;
    }

    /**
     * Set the value of lifePoints
     *
     * @param  int  $lifePoints
     *
     * @return  self
     */ 
    public function setLifePoints(int $lifePoints)
    {
        $this->lifePoints = $lifePoints;

        return $this;
    }
}