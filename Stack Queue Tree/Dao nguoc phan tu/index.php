<?php

$arr = [1,2,3,4,5,6,7,8,9];

$stack = new SplStack();
for ($i = 0; $i < count($arr) ;$i++){
    $stack->push($arr[$i]);
}

$array = [];

for ($i = 0; $i < count($arr)  ;$i++){
    array_push($array,$stack->pop());
}

echo "<pre>";
print_r($array);
echo "<pre>";