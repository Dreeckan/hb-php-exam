<?php

function fonctionAffine(int $parametre)
{
    if ($parametre > 5) {
        $resultat = $parametre * 4 + 6;
        return $resultat;
    } else {
        $resultat = $parametre * 3 - 2;
        return $resultat;
    }
}

function suiteNPlusUn (int $parametre)
{
    $i = 1;
    $resultat = 0;
    while ($i <= $parametre) {
        $resultat += $i;
        $i++;
    }
    return $resultat;
}

echo fonctionAffine(2);
echo fonctionAffine(5);
echo fonctionAffine(10);

echo suiteNPlusUn(2);
echo suiteNPlusUn(5);
echo suiteNPlusUn(10);