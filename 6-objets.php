<?php

use Game\BoardGame;
use Game\VideoGame;

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

$videoGame0 = new VideoGame();
$videoGame0->setName('Darksouls');
$videoGame0->setPrice(59.99);

$boardGame0 = new BoardGame();
$boardGame0->setName('Uno');
$boardGame0->setPrice(14.56);

echo '<ul>
        <li>Nom du jeu '.$videoGame0->getName().'</li>
        <li>Prix du jeu '.$videoGame0->getPrice().'</li>
      </ul>';
echo '<ul>
        <li>Nom du jeu '.$boardGame0->getName().'</li>
        <li>Prix du jeu '.$boardGame0->getPrice().'</li>
      </ul>';
