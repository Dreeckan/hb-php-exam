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
<thead> <!-- En-tête du tableau -->
       <tr>
           <th>Nom du Jeu</th>
           <th>Prix (en euros)</th>
       </tr>
   </thead>
    <?php
    foreach ($games as $game) {
        ?>
            <tr>
            <td><a href='5-superglobales.php?price=<?php echo $game["price"]?>'><?= $game['name'] ?></a></td>
            <td><?php 
            if ($game['price'] < 50) {
                echo number_format($game['price'], 2, ",", " "); echo "€ (pas cher !)";
            } else {
                echo number_format($game['price'], 2, ",", " "); echo "€";
            }?>
            </td>
        </tr>
        <?php
        }
    ?>
</table>