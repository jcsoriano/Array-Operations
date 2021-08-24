<?php

include_once('./Main.php');

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 10000);
}

$main = new Main($array);
echo "\nInput: " . implode(', ', $array);
echo "\nSUM of two random integers: " . $main->sum();
echo "\n\n";
