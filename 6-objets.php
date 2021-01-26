<?php

use Game\BoardGame;
use Game\VideoGame;

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

$boardGame = new BoardGame();
$boardGame->setName('Here to Slay');
$boardGame->setPrice(25);

$videoGame = new VideoGame();
$videoGame->setName('Star Wars KOTOR');
$videoGame->setPrice(3);

echo $videoGame->getName() . ' ' . $videoGame->getPrice() . ' €</br>';
echo $boardGame->getName() . ' ' . $boardGame->getPrice() . ' €';
