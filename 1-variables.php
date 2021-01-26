<?php


// // La fonction array permet de créer un array
// $objects = array ("test", 42, 0.0);

// array_push($objects, "ajout");
// array_push($objects["index"] = "ajout2");

// var_dump($objects)


// On crée notre array $coordonnees
$objects = array (
    1 => 'test',
    2 => 42,
    3 => 0.0
);
$objects[] =  "ajout";
$objects["index"] = "ajout2";

echo $objects["index"];


?>