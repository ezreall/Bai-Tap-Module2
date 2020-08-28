<?php
function findMin($array){
        $min = $array[0];
        $index = 0;;
        for ($i = 1; $i < count($array) ; $i++){
            if ($array[$i] < $min){
                $min = $array[$i];
                $index = $i;
            }
        }
        return $index;
}

$array1 = array(5,8,3,4,11,1);
$result = findMin($array1);
echo $result;