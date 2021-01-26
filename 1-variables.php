<?php

// Déclaration du tableau "objects"

$objects = array (
    1 => 'test',
    2 => 42,
    3 => 0.0
);

// Ajout de l'élément "ajout" à la suite du tableau par defaut

$objects[] =  "ajout";

// Ajout de l'élément "ajout2" à la suite du tableau par défaut à l'index "index"

$objects["index"] = "ajout2";

// Afficher, avec un echo, le contenu de l'index index dans le tableau

echo $objects["index"];


?>