<?php

use Game\BoardGame;
use Game\VideoGame;

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

$videoGame = new VideoGame;
$videoGame->setName('Cyberpunk 2077');
$videoGame->setPrice(25);

$boardGame = new BoardGame;
$boardGame->setName('Uno');
$boardGame->setPrice(1000);

echo $videoGame->getName() . ' ' . $videoGame->getPrice() . '€<br/>';
echo $boardGame->getName() . ' ' . $boardGame->getPrice() . '€<br/>';
