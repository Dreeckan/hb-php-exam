<?php

namespace Game;

/**
 * Une classe abstraite est une classe qu'on ne peut pas instancier (qui reste abstraite), mais dont on va hériter (elle aura des classes filles). Elle sert surtout à représenter les traits communs à plusieurs classes.
 */
abstract class AbstractGame
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return AbstractGame
     */
    public function setName(string $name): AbstractGame
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return AbstractGame
     */
    public function setPrice(float $price): AbstractGame
    {
        $this->price = $price;

        return $this;
    }
}