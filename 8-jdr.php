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
    
    while (!$legolas->hasSurrendered() && !$gimli->hasSurrendered()) {
        $damage = $legolas->attack($gimli);
        echo 'Legolas attaque Gimli ! <br />';
        if ($damage > 0) {
            echo "Legolas inflige $damage dégâts à Gimli ! <br />";
            echo 'Points de vie de ' . $gimli->getName() . ' : ' . $gimli->getLifePoints() . '</br>';
        } else {
            echo "Legolas a raté son attaque ! <br />";
            echo 'Points de vie de ' . $gimli->getName() . ' : ' . $gimli->getLifePoints() . '</br>';
        }

        if (!$gimli->hasSurrendered()) {
            $damage = $gimli->attack($legolas);

            echo 'Gimli attaque Legolas ! <br />';
    
            if ($damage > 0) {
                echo "Gimli inflige $damage dégâts à Legolas ! <br />";
                echo 'Points de vie de ' . $legolas->getName() . ' : ' . $legolas->getLifePoints() . '</br>';
            } else {
                echo "Gimli a raté son attaque ! <br />";
                echo 'Points de vie de ' . $legolas->getName() . ' : ' . $legolas->getLifePoints() . '</br>';
            }
        }
    }

    if ($legolas->hasSurrendered()) {
        echo "Legolas abandonne ! Gimli a gagné !<br />";
    } else {
        echo "Gimli abandonne ! Legolas a gagné !<br />";
    }
