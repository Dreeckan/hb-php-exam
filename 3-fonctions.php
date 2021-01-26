<?php
function fonctionAffine(int $n) : int
{
    if ($n > 5) {
        return 4 * $n + 6;
    }
    if ($n <= 5) {
        return 3 * $n - 2;
    }
}

function suiteNPlusUn(int $n) : int
{
    $somme = 0;

    for ($i=1; $i<=$n;$i++) {
        $somme += $i;
    }
    return $somme;
}

var_dump(fonctionAffine(0), fonctionAffine(5), fonctionAffine(10), suiteNPlusUn(0), suiteNPlusUn(5), suiteNPlusUn(10));
