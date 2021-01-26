<?php

function fonctionAffine(int $n)
{
    if ($n > 5) {
        return 4*$n + 6;
    } else {
        return 3*$n - 2;
    }
}

var_dump(fonctionAffine(2));
var_dump(fonctionAffine(2040));
var_dump(fonctionAffine(66));

function suiteNPlusUn(int $n)
{
    $y = 0;
    for ($i = 1; $i <= $n; $i++) {
        $y = $y + $i;
    };
    return $y;
}

var_dump(suiteNPlusUn(4));
var_dump(suiteNPlusUn(196));
var_dump(suiteNPlusUn(6000));
