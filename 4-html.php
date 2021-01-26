<?php

$games = [
    [
        'name' => 'Hadès',
        'price' => 45,
    ],
    [
        'name' => 'Cyberpubnk 2077 - édition avec carte graphique',
        'price' => 850,
    ],
    [
        'name' => 'Disco Elysium',
        'price' => 55,
    ],
    [
        'name' => 'Exo One',
        'price' => 25,
    ],
    [
        'name' => 'Among Us',
        'price' => 4,
    ],
];
?>

<table>
    <thead>
    <tr>
        <td>Nom des jeux</td>
        <td>Prix</td>
    </tr>
    </thead>
    <tbody>
    <?php


    foreach ($games as $game) {
        echo '
            <>
                <td><a href="5-superglobales.php?price=' . $game['price'] . '">' . $game['name'] . '</a></td>';

        if ($game['price'] < 50) {
            echo '<td>' . number_format($game['price'], 2, ',', ' ') . '€ pas cher !</td></tr>';
        } else {
            echo '<td>' . number_format($game['price'], 2, ',', ' ') . '€</td></tr>';
        }

    }
    ?>
    </tbody>
</table>
