<?php


function fonctionAffine(int $n): int
{
    if ($n > 5) {
        return 4 * $n + 6;
    }

    if ($n <= 5) {
        return 3 * $n - 2;
    }
}

function suiteNPlusUn(int $n): int
{
    /**
     * @var int
     */
    $somme = null;

    for ($i = 1; $i <= $n; $i++) {
        $somme += $i;
    }

    return $somme;

}


var_dump(fonctionAffine(5));
var_dump(fonctionAffine(15));
var_dump(fonctionAffine(5418));

var_dump(suiteNPlusUn(5));
var_dump(suiteNPlusUn(45));
var_dump(suiteNPlusUn(2));


