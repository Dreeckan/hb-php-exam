<?php

namespace game;

abstract class AbstractGame
{

    // Une classe abstraite permet d'avoir des parametres generaux, qui seront ensuite transmissible,
    // a toutes les classes qui etendent cette derniere.
    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $price;

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
}
