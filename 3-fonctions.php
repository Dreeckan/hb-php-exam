<?php

// calcul fonction affine

function fonctionAffine(int $n): int
{
    if ($n > 5) {
        return 4 * $n + 6;
    } else {
        return 3 * $n - 2;
    }
}

var_dump(fonctionAffine(2));
var_dump(fonctionAffine(0));
var_dump(fonctionAffine(7));

// calcul somme des entiers consécutifs de 1 à $n

function suiteNPlusUn(int $n): int
{
    $somme = 0;
    for ($i=1 ; $i<=$n ;$i++) {
        $somme += $i;
    }
    return $somme;

    // ou simplement return ($n * ($n + 1)) / 2;
}

var_dump(suiteNPlusUn(4));
var_dump(suiteNPlusUn(2));
var_dump(suiteNPlusUn(1));
