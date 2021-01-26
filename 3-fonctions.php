<?php

function fonctionAffine(int $n):int //fonction qui défini un nombre entier
{
    if ($n > 5) { //Si $n est strictement supérieur à 5
        return 4*$n + 6; // Retourne le calcul suivant
    } else {
        return 3*$n - 2; // Sinon, retourne cet autre calcul.
    }
}

function suiteNPlusUn(int $n): int // Fonction qui fait l'addition de tous les nombres entiers de 1 à $n.
{
    return $n * ($n + 1)/2;
};

//Les 3 appels test de fonctionAffine :
var_dump(fonctionAffine(12));
var_dump(fonctionAffine(3));
var_dump(fonctionAffine(5));

//Les 3 appels tests de la suiteNPlusUn :
var_dump(suiteNPlusUn(6));
var_dump(suiteNPlusUn(10));
var_dump(suiteNPlusUn(8));
