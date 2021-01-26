<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>

    <?php
        foreach ($shoes as $shoe) {
            ?>
        <tr>
            <td>
                <?= $shoe['name']; ?>
            </td>
            <td>
                <?php
                if ($shoe['price'] > 100) {
                    echo number_format($shoe['price'], 2, ',', ' ').' €'. ' !';
                } else {
                    echo number_format($shoe['price'], 2, ',', ' ').' €' ;
                } ?>
            </td>
            <td>
                <?= $shoe['stock']; ?>
            </td>
        </tr>
    <?php
        } ?>

</table>