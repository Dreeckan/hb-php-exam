<?php
function fonctionAffine(int $n): int
{
    if ($n > 5) {
        return 4 * $n + 6;
    } elseif ($n <= 5) {
        return 3 * $n - 2;
    }
};

function suiteNPlusUn(int $n): int
{
    return $n * ($n + 1) / 2;
};

var_dump(fonctionAffine(8), fonctionAffine(1), fonctionAffine(6));
var_dump(suiteNPlusUn(12), suiteNPlusUn(5), suiteNPlusUn(6));
