<?php

namespace game;

abstract class abstractGame  //une classe abstraite est une classe ne pouvant être instanciée. Elle sert de "base/modèle" à d'autre objets
{
    /**
    * @var string
    * */
    protected $name;
    
    /**
    * @var int
    * */
    protected $price;
    
    
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


    public function __construct()
    {
        $this->countBook = 200;
    }
} 