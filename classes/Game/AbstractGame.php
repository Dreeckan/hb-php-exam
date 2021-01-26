<?php
namespace Game;

abstract class AbstractGame // Une classe abstraite est une classe qui ne peut pas être instanciée, c'est à dire qui ne peu pas créer d'objet.
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
     * Met à jour le nom du jeu
     *
     * @param string $name
     * @return void
     */

    public function setName($name)
    {
        $this->name = $name;
    }
 
    /**
     * Retourne le nom du jeu
     *
     * @param void
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Met à jour le prix du jeu
     *
     * @param string $name
     * @return void
     */

    public function setPrice($price)
    {
        $this->price = $price;
    }
 
    /**
     * Retourne le prix du jeu
     *
     * @param void
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }
}
