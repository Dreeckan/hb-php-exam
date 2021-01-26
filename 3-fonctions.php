<?php

    /**
     * @param int
     */

    function fonctionAffine(int $n): int
    {
        if ($n > 5) {
            return ($n * 4) + 6;
        }
        return ($n * 3) - 2;
    }

    /**
     * @param int
     */

    function suiteNPlusUn(int $n): int
    {
        if ($n > 1) {
            return $n + suiteNPlusUn($n - 1);
        } else {
            return 1;
        }
    }

    var_dump(
        'Resultats fonctionAffine()',
        fonctionAffine(6),
        fonctionAffine(10),
        fonctionAffine(3)
    );

    var_dump(
        'Resultats suiteNPlusUn()',
        suiteNPlusUn(5),
        suiteNPlusUn(50),
        suiteNPlusUn(1)
    );
