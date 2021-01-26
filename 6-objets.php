<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Game\VideoGame;
use Game\BoardGame;

$videoGame = new VideoGame();
$videoGame->setName('Among Us')->setPrice(4);

$boardGame = new BoardGame();
$boardGame->setName('Blanc manger coco')->setPrice(29.9);

echo $videoGame->getName() . ' ' . $videoGame->getPrice() . ' €';
echo '</br>';
echo $boardGame->getName() . ' ' . $boardGame->getPrice() . ' €';
