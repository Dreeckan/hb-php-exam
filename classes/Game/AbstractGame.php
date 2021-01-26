<?php
// Une classe abstraite ne peut pas être instancié, elle n'existe pas réellement ? (pire explication :) )
namespace Game;

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

    // Je sais pas quoi mettre en annotations mais j'ai bien vu la question pour les méthodes et les propriétés désolé \o/
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
