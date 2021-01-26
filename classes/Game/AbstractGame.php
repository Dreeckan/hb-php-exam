<?php

namespace Game;

// Une classe abstraite est une sorte de modèle sur lequel sur base les futures classes filles, on ne peut pas créer d'objet à partir de celle-ci, elle reste le plan de fabrication qu'on viendra surcharger avec d'autres propriétés ou méthodes des classes filles

abstract class AbstractGame
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $name;


    // met à jour le contenu de la propriété `price` à partir de la variable `$price`

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

    // renvoie le contenu de la propriété `price`

    /**
     * @return float
     */
    public function getPrice():float
    {
        return $this->price;
    }

    

    // met à jour le contenu de la propriété `name` à partir de la variable `$name`

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

    // renvoie le contenu de la propriété `name`

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
}
