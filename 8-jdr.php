<?php

// Autoloader, pour que nos classes soient chargées
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Rpg\Dwarf;
use Rpg\Elf;

$gimli = new Dwarf('Gimli');

$legolas = new Elf('Legolas');

echo 'Le combat démarre ! <br />';

while ($legolas->hasSurrendered() == false || $gimli->hasSurrendered() == false) {
    $damage = $legolas->attack($gimli);

    echo 'Legolas attaque Gimli ! <br />';
    if ($damage > 0) {
        $gimli->setLifePoints($gimli->getlifePoints() - $damage);
        echo 'Legolas inflige '.$damage.' dégâts à Gimli ! <br />
        Il reste '.$gimli->getLifePoints().' points de vie à Gimli!<br />';
    } else {
        echo "Legolas a raté son attaque ! <br />";
    }

    if (!$gimli->hasSurrendered()) {
        $damage = $gimli->attack($legolas);

        echo 'Gimli attaque Legolas ! <br />';
        if ($damage > 0) {
            $legolas->setLifePoints($legolas->getlifePoints() - $damage);
            echo 'Gimli inflige '.$damage.' dégâts à Legolas ! <br />
            Il reste '.$legolas->getLifePoints().' points de vie à Legolas!<br />';
        } else {
            echo "Gimli a raté son attaque ! <br />";
        }
    }
}
    if ($legolas->hasSurrendered() == true) {
        echo "Legolas abandonne ! Gimli a gagné !<br />";
    } elseif ($gimli->hasSurrendered() == true) {
        echo "Gimli abandonne ! Legolas a gagné !<br />";
    }

var_dump($gimli);
var_dump($legolas);
