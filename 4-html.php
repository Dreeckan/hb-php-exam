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
    <thead>
        <tr>
            <th>nom du jeu</th>
            <th>prix</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($games as $value) {

            /**
             * les variables recupères et stock les valeurs du tableau games.
             */
            $name = $value['name'];
            $price = $value['price'];
        ?>
            <tr>
                <td><a href="5-superglobales.php?price=<?php echo $price; ?>">
                        <?php echo $name ?></a></td>
                <td><?php echo number_format($price, 2, ',', ' ');
                    echo "€";
                    if ($price < 50) {
                        echo " pas chère !";
                    }
                    ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>