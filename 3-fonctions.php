<?php

var_dump(fonctionAffine(-5));
var_dump(fonctionAffine(1532));
var_dump(fonctionAffine(0));


var_dump(suiteNPlusUn(-5));
var_dump(suiteNPlusUn(1532));
var_dump(suiteNPlusUn(0));


/**
 * @param int $n
 *
 * @return int
 */
function fonctionAffine(int $n): int
{
    if ($n > 5) {
        return (4 * $n) + 6;
    }
    return (3 * $n) - 2;
}

/**
 * @param int $n
 *
 * @return int|false
 */
function suiteNPlusUn(int $n)
{
    if ($n < 0) {
        return false;
    }
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        $result = $result + $i;
    }

    return $result;
}