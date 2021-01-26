<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Game\BoardGame;
use Game\VideoGame;

$videoGame = new VideoGame();
$videoGame->setName('FIFA 21');
$videoGame->setPrice(20);

$boardGame = new BoardGame();
$boardGame->setName('Loup-Garou');
$boardGame->setPrice(15);

echo $videoGame->getName() . ' ' . $videoGame->getPrice() . '€<br/>';
echo $boardGame->getName() . ' ' . $boardGame->getPrice() . '€<br/>';