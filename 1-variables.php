<?php

$objects = ['test', '42', '0.0'];

$objects[] = 'ajout';

$objects['index'] = 'ajout2';

var_dump($objects);

echo ''.$objects['index'].'';
