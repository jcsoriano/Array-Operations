<?php

include_once('./Main.php');

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 10000);
}

$main = new Main($array);
echo "\nInput: " . implode(', ', $array);
echo "\nASC: " . implode(', ', $main->sort('ASC'));
echo "\nDESC: " . implode(', ', $main->sort('DESC'));
echo "\n\n";
