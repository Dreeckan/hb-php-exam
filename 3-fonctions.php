<?php
function fonctionAffine(int $n)
{
    if ($n > 5) {
        $calcul1 = 4 * $n + 6;
        return $calcul1;
    } else {
        $calcul2 = 3 * $n - 2;
        return $calcul2;
    }
}

function suiteNPlusUn(int $n)
{
    $calcul3 = $n * ($n + 1) / 2;
    return $calcul3;
}
var_dump(fonctionAffine(6), fonctionAffine(12), fonctionAffine(3));
var_dump(suiteNPlusUn(3), suiteNPlusUn(6), suiteNPlusUn(9));
