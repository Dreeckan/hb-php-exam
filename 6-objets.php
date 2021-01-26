<?php

use Game\BoardGame;
use Game\VideoGame;

//spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    //$class = str_replace($class, '\\', '/');
    //require_once "classes/$class.php";
//});
require_once 'classes/Game/AbstractGame.php';
require_once 'classes/Game/VideoGame.php';
require_once 'classes/Game/BoardGame.php';

$videoGame = new VideoGame();

$videoGame->setName('Overwatch');
$videoGame->setPrice(15);

$boardGame = new BoardGame();

$boardGame->setName('Risk');
$boardGame->setPrice(25);

echo $videoGame->getName(). ' '.$videoGame->getPrice(). '€ <br/>';
echo $boardGame->getName(). ' '.$boardGame->getPrice(). '€';
