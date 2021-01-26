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
            <th>Nom du jeu</th>
            <th>Prix</th>
        </tr>
<tbody>
    <?php
    foreach ($games as $game) {
        $name = $game['name'];
        $price = $game['price']; ?>
        <tr>
            <td><a href="5-superglobales.php?price=<?php echo $price; ?>">
                    <?php echo $name ?></a></td>
            <td><?php echo number_format($price, 2, ',', ' ');
        echo "€";
        if ($price < 50) {
            echo " pas chère !";
        } ?></td>
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
