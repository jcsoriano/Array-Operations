<?php

class Main
{
    public function __construct(protected array $array)
    {
        //
    }

    public function sum(): int
    {
        // in PHP, arrays are copied by value, not reference
        $array = $this->array;

        // splicing doesn't affect $this->array. Remove the random item from
        // $array so it doesn't get selected again
        $firstElement = array_splice($array, array_rand($array), 1)[0];

        // the second element is guaranteed to be different from the first element
        $secondElement = $array[array_rand($array)];

        return $firstElement + $secondElement;
    }

    public function sort(string $order)
    {
        // in PHP, arrays are copied by value, not reference
        $array = $this->array;

        // sort the array copy
        if ($order === 'ASC') {
            sort($array, SORT_NUMERIC);
            return $array;
        } elseif ($order === 'DESC') {
            rsort($array, SORT_NUMERIC);
            return $array;
        } else {
            echo 'Order should either be ASC or DESC';
            exit;
        }
    }

    public function average()
    {
        $sum = 0;
        foreach ($this->array as $item) {
            $sum += $item;
        }
        return $sum / count($this->array);
    }
}
