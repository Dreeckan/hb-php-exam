<?php

namespace Game;

abstract class AbstractGame //Une classe qui ne peut pas être instancié ! Elle sert de modèle aux classe qui l'utiliseront !
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
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}