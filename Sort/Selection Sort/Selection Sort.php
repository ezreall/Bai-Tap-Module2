<?php

function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] > $array[$max]) {
                $max = $j;
            }
        }
        if ($max != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$max];
            $array[$max] = $temp;
        }
    }
    return $array;
}

$array = [1, 9, 4.5, 6.6, 5.7, -4.5];

echo "<pre>";
var_dump(selectionSort($array));
echo "<pre>";
