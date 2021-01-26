<?php

namespace Game;

//Une class abstract est considéré comme étant une classe modèle dont toute classe fille possédera les méthodes et attributs. On ne peut pas l'instancier
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
     * Récupérer la valeur de name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Établir la valeur de name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Récupérer la valeur de price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Établir la valeur de name
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
