<?php
function findMax($arr){
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++){
        for ($j = 1; $j < count($arr[$i]); $j++){
            if ($arr[$i][$j] > $max){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

$array = array(
    [1,3,8],
    [14,13,7],
    [10,3,18]
);

echo findMax($array);