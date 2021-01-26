<?php
namespace Game;

/*
 Je considere une classe abstraite comme étant une classe modèle
 dont toute classe fille possédera les méthodes et attributs.
*/
abstract class AbstractGame
{
    /**
     * @var string
     */
    protected $name;

    /**
    * @var float
    */
    protected $price;

    /**
    * @param string
    */
    public function getName(): string
    {
        return $this->name;
    }

    /**
    * @param float
    */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
    * @param string
    */
    public function setName(string $name): string
    {
        return $this->name = $name;
    }

    /**
    * @param float
    */
    public function setPrice(float $price): float
    {
        return $this->price = $price;
    }
}
