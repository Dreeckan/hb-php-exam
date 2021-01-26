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
<!-- Entête du tableau -->
    <tr> 
        <th>Nom des jeux</th>
        <th>prix (en euros)</th>
    </tr>


<?php foreach ($games as $game) { //Pour chaque jeu du tableau contenu dans la variable $games, nous voulons afficher les colonnes "nom" et "prix"
        
    ?>
    <tr>
    <!-- Colonne nom avec lien pointant vers la page 5-superglobales.php avec le prix dans l'url-->
        <td><a href="5-superglobales.php?price=<?php echo $game['price']; ?>">
                <?= $game['name']; ?>
            </a>
        </td>
    <!-- colonne prix au format français, 2 chiffres après la virgule -->    
        <td> 
            <?php if ($game['price'] < 50) {
        echo number_format($game['price'], 2, ',', ' ')." €". " (pas chère !)";
    } else {
        echo number_format($game['price'], 2, ',', ' '); ?> €
            <?php
    }
            ?>
        </td>
    </tr>
<?php
}
?>

</table>