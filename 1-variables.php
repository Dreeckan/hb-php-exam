<?php
$objects = [
    'test',
    42,
    0.0,
];
array_push($objects, "ajout");
$objects['index'] = 'ajout2';

echo $objects['index'];
