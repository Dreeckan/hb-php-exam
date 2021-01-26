<?php

namespace Game;

abstract class AbstractGame
// Une classe abstraite est une classe qui ne peut pas être instanciée.
// Elles permettent aux classes enfant une implémentation de méthodes abstraites
{
    /*
    @var string
    */
    protected $name;
    /*
    @var float
    */
    protected $price;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }
}
