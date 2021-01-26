<?php
// Définition de l'objet comme un tableau et entrée des différentes valeurs.
$objects = [
    ['name' => 'test'],
    ['name' => 42],
    ['name' => 0.0],
];


$arr['name'] = 'ajout';
?>

<table>
    <?php
        foreach ($objects as $object) { //Pour chaque objet, on met une ligne.
            ?>        
        <tr>
            <td><?php echo $object['name']; ?></td>
        </tr>
    <?php
        }
    ?>
</table>