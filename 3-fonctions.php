<?php

function fonctionAffine(int $n)
{
    if ($n>5) { 
        return 4 * $n + 6;
    } else {
        return 3 * $n - 2;
    }
}


function suiteNPlusUn(int $n): int
{
    return $n * ($n + 1)/2;
};

var_dump(fonctionAffine(3),fonctionAffine(2),fonctionAffine(4));

var_dump(suiteNPlusUn(3),suiteNPlusUn(2),suiteNPlusUn(4));