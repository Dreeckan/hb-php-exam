<?php
namespace Game;

use Game\AbstractGame;
use game\BoardGame;
use game\VideoGame;

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

$videoGame = new VideoGame();
$videoGame->setName('Among Us 2, le retour');
$videoGame->setPrice(8);


$boardGame = new BoardGame();
$boardGame->setName('King of Tokyo');
$boardGame->setPrice(20);

echo $videoGame->getname();
echo $videoGame->getprice()?> <br/>

<?php
echo $boardGame->getname();
echo $boardGame->getprice()?> <br/>
