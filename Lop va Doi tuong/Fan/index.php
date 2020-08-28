<?php
include("Fan.php");
$fan1 = new Fan();
$fan1->setSpeed(3);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);

$fan2 = new Fan();
$fan2->setSpeed(2);
$fan2->setRadius(5);

$fan1->toString();
echo "<br>";
$fan2->toString();