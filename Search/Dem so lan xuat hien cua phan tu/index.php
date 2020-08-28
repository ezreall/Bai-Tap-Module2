<?php

$array = [];
for ($i = 0; $i < 100 ;$i++){
    array_push($array,mt_rand(0,10));
}

function dem($numbers,$number){
    $count = 0;
    for ($i = 0; $i < count($numbers) ;$i++){
        if ($numbers[$i] == $number){
            $count++;
        }
    }
    return $count;
}

echo dem($array,5);