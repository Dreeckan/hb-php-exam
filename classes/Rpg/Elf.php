<?php
declare(strict_types=1);

namespace Rpg;

//Une classe abstraite est une classe "signature" qui sert à créer d'autres classes qui hériteront de ses caractéristiques, cette classe ne peut pas être instanciée.
class Elf extends AbstractCharacter
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setStrength(17);
        $this->setLifePoints(75);
    }
}
