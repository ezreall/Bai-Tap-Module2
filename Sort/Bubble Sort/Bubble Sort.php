<?php

function bubbleSort($array){
    for ($i = 0; $i < count($array) ;$i++){
        for($j = 0; $j < count($array) - 1 - $i; $j++){
            if($array[$j] < $array[$j + 1]) {
                $temp = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

print_r(bubbleSort($array));