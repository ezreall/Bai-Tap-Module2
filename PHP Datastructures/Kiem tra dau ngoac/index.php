<?php
include_once "Checker.php";

$checker = new Checker();

var_dump($checker->check('(– b + (b2 – 4*a*c)^0.5) / 2*a'));

