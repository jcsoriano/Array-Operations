<?php

include_once('./Child.php');

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 10000);
}

$main = new Child($array);
echo "\nInput: " . implode(', ', $array);
echo "\nSUM of first and last integers: " . $main->sum();
echo "\n\n";
