  <table>
    <th>Noms des jeux</th>
    <th>Prix en €</th>
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
