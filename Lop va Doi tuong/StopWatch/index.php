<?php
include "StopWatch.php";
$watch = new StopWatch();
$watch->start();
$arr = array();
for ($i = 0; $i < 1000000; $i++){
    array_push($arr,mt_rand(0,1000));
}
sort($arr);
$watch->stop();
echo $watch->getElapsedTime();