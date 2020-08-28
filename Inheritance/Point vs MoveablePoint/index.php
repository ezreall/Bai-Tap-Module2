<?php
include 'Point.php';
include 'MovablePoint.php';

$point = new Point(5,10);
$point->toString();

$movablePoint = new MovablePoint(5,5,1,1);
$movablePoint->toString();
$movablePoint->move();
echo '<br>';
var_dump($movablePoint->getXY());