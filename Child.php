<?php

include_once './Main.php';

class Child extends Main
{
    public function sum(): int
    {
        $array = $this->array;
        return $array[0] + $array[count($array) - 1];
    }
}
