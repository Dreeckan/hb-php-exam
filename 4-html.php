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
        <th>Nom des Jeux</th>
        <th>Prix</th>
    </tr>
<?php

foreach ($games as $game) {
    ?>
    
    <tr>
        <td><a href="5-superglobales.php?price=<?=$game['price']?>"><?= $game['name'] ?></td>
        <td>
            <?php
                if ($game['price'] < 50) {
                    echo number_format($game['price'], 2, ',', '&nbsp;') . " €" . ' Pas cher !<br/>';
                } else {
                    echo number_format($game['price'], 2, ',', '&nbsp;') . " €";
                } ?>
        </td>
    </tr>

<?php
}
?>
</table>

