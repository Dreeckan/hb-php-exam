<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});



$jeuvideo1 = new Game\VideoGame();
$boardgame = new Game\BoardGame();


$jeuvideo1->setName('Crash Bandicoot');
$jeuvideo1->setPrice(35);
$boardgame->setName('Les 7 familles');
$boardgame->setPrice(20);

echo $jeuvideo1->getname();
echo ' ';
echo $jeuvideo1->getprice();
echo ' € ';
echo $boardgame->getname();
echo ' ';
echo $boardgame->getprice();
echo ' € ';
