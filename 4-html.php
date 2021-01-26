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
   <?php
   function AfficherPrice($price)
   {
       if ($price < 50) {
           return number_format($price, 2, ",", " ")." € (pas chère !)";
       }
       return number_format($price, 2, ",", " ")." €";
   }
        foreach ($games as $game) {
            echo '<tr>
                    <td>
                        <a href="5-superglobales.php?price='.$game["price"].'">'.$game['name'].'</a>
                    </td>
                    <td>'.AfficherPrice($game['price']).'</td>
                </tr>';
        }
   ?>
</table>