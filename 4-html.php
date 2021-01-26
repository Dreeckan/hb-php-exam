<?php

$games = [
    [
        'name'  => 'Hadès',
        'price' => 45,
    ],
    [
        'name'  => 'Cyberpunk 2077 - édition avec carte graphique',
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
        <th>Nom du Jeu</th>
        <th>Prix</th>

    </tr>

    <?php
    foreach ($games as $game) {
    ?>
        <tr>
            <td>
                <a href="5-superglobales.php?price=<?php echo $game['price']; ?>"><?= $game['name']; ?>
                </a>
            </td>
            <td>
                <?= number_format($game['price'], 2, ',', '');
                if ($game['price'] < 50) {
                    echo ' (pas chère !)';
                } ?> €
            </td>
        </tr>
    <?php

    }
