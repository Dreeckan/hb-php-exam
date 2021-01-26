<?php



spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "classes/$class.php";
});


$boardGame = new Game\BoardGame();
$videoGame = new Game\VideoGame();

$boardGame->setName('Uno');
$boardGame->setPrice(15);
$videoGame->setName('Farcry');
$videoGame->setPrice(60);

echo $boardGame->getName();
echo ' ';
echo $boardGame->getPrice();
echo ' € ';
echo $videoGame->getName();
echo ' ';
echo $videoGame->getPrice();
echo ' € ';
