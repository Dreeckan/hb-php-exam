<?php

function fonctionAffine(int $n) : int
{
    if ($n > 5) {
        return 4 * $n + 6;
    } elseif ($n <= 5) {
        return 3* $n - 2;
    }
}

function suiteNPlusUn(int $n): int
{
    return $n * ($n + 1)/2;
};

var_dump(fonctionAffine(2), fonctionAffine(5), fonctionAffine(4));
var_dump(suiteNPlusUn(3), suiteNPlusUn(20), suiteNPlusUn(9));
