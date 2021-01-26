<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Game\BoardGame;
use Game\VideoGame;

$boardGame0 = new BoardGame();
$boardGame0->setName("Hero Quest");
$boardGame0->setPrice(80);

$videoGame0 = new VideoGame();
$videoGame0->setName("L'arche du Captain Blood");
$videoGame0->setPrice(50);

echo ''.$boardGame0->getName().' '.$boardGame0->getPrice().' € </br></br>';
echo ''.$videoGame0->getName().' '.$videoGame0->getPrice().' € </br></br>';
