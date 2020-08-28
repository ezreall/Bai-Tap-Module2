<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(5,"blue");
$cylunder = new Cylinder(5,"red",10);

$circle->toString();
echo "<br>";
$cylunder->toString();