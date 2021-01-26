<?php
// Définition de l'objet comme un tableau et entrée des différentes valeurs.
$objects = [
    ['index' => 'test'],
    ['index' => 42],
    ['index' => 0.0],
];


$objects[] =  ['index' => 'ajout'];
$objects['index'] = ['index' => 'ajout2'];

?>

<table>
    <?php
        foreach ($objects as $object) { //Pour chaque objet, on met une ligne.
            ?>        
        <tr>
            <td>
                <?php echo $object['index']; ?>
            </td>
        </tr>
    <?php
        }
    ?>
</table>