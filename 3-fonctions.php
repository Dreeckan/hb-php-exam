<?php

function fonctionAffine(int $n): int
{
    if ($n > 5) {
        return 4*$n + 6;
    } else {
        return 3*$n -2;
    }
};

var_dump(fonctionAffine(1));
var_dump(fonctionAffine(10));
var_dump(fonctionAffine(5));

function suiteNPlusUn(int $n): int
{
    return $n * ($n + 1)/2;
};

var_dump(suiteNPlusUn(4));
var_dump(suiteNPlusUn(5));
var_dump(suiteNPlusUn(2));
