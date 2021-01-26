<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/Game/$class.php";
});

$videoGame = new VideoGame();
$videoGame->setName('Among Us')->setPrice(4);

$boardGame = new VideoGame();
$boardGame->setName('Blanc manger coco')->setPrice(29.9);

echo $videoGame->getName() . ' ' . $videoGame->getPrice() . ' €';
echo '</br>';
echo $boardGame->getName() . ' ' . $boardGame->getPrice() . ' €';
