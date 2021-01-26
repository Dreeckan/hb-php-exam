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
        <th>Prix</th>
    <tr>
    <tr><?php foreach ($games as $game) {
    $name = $value['name'];
    $price = $value['price'];
}
 ?>
 </tr>
    <tr><?php $game['price'] ?></tr>
</table>

