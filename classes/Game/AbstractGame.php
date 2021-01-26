<?php
declare(strict_types=1);

namespace Game;

//Une classe abstraite est une classe "signature" qui sert à créer d'autres classes qui hériteront de ses caractéristiques, cette classe ne peut pas être instanciée.
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set the value of price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
