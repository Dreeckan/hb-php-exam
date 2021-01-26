<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Game\AbstractGame;
use Game\VideoGame;
use Game\BoardGame;

$videoGame = new VideoGame();
$videoGame->setName('Secret of Mana');
$videoGame->setPrice(17);

$boardGame = new BoardGame();
$boardGame->setName("Terraforming Mars");
$boardGame->setPrice(49);
?>

<?php echo $videoGame->getname(); ?>: <?php echo $videoGame->getprice(); ?> €<br />
<?php echo $boardGame->getname(); ?>: <?php echo $boardGame->getprice(); ?> €<br />