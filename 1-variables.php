<?php
 
 $objects = [
    'test',
    42,
    0.0,
];
array_push($objects, 'ajout');
$objects['index'] = 'ajout 2';

echo($objects['index']);
