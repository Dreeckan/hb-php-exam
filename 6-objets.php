<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    $class = str_replace('\\', '/', $class);
    require_once "classes/$class.php";
});

use Game\VideoGame;
use Game\BoardGame;

$amongUs = new VideoGame();
$amongUs->setName('Among Us');
$amongUs->setPrice(4);

echo
    $amongUs->getName()
    .' : '.
    $amongUs->getPrice()
    .'€'
;
echo '<br />';



$chevaliers = new BoardGame();
$chevaliers->setName('Les chevaliers de la table ronde');
$chevaliers->setPrice(45);

echo
    $chevaliers->getName()
    .' : '.
    $chevaliers->getPrice()
    .'€'
;
echo '<br />';