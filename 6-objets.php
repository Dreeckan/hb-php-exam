<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use game\BoardGame;
use game\VideoGame;

$jeuSociete = new BoardGame();
$jeuSociete->setName('Le 6 qui prend');
$jeuSociete->setPrice(15);

$jeuVideo = new VideoGame();
$jeuVideo->setName('Rocket League');
$jeuVideo->setPrice(25);

echo $jeuVideo->getName() . ' ' . $jeuVideo->getPrice() . ' €';
echo '</br>';
echo $jeuSociete->getName() . ' ' . $jeuSociete->getPrice() . ' €';
