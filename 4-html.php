<?php

$games = [
    [
        'name'  => 'Hadès',
        'price' => 45,
    ],
    [
        'name'  => 'Cyberpubnk 2077 - édition avec carte graphique',
        'price' => 850,
    ],
    [
        'name'  => 'Disco Elysium',
        'price' => 55,
    ],
    [
        'name'  => 'Exo One',
        'price' => 25,
    ],
    [
        'name'  => 'Among Us',
        'price' => 4,
    ],
];
?>

<table>
    <tr>
        <th>Nom des jeux</th>
        <th>Prix (en euros)</th>
    </tr>
    <?php foreach ($games as $game) {
    if ($game['price'] < 50) {
        $pasCher = '(Pas cher!)';
    } else {
        $pasCher = ' ';
    }
    echo '<tr>
                    <td><a href = "5-superglobales.php?price='.$game['price'].'"> '.$game['name'].'</a></td>
                    <td>'.number_format($game['price'], 2, ',', ' ').'€ '.$pasCher.'</td>
                </tr>';
}
     ?>
</table>
