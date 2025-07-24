<?php
$rabbit = 'harimau';
$cat = 'kucing';
$dog = 'anjing';

function getAnimal($rabbit = 'rabbit', $cat = 'cat', $dog = 'dog') {
    return $rabbit . ', ' . $cat . ', ' . $dog;
}

echo getAnimal($rabbit, $cat, $dog, 1231);

?>