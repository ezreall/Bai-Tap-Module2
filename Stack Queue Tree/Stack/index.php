<?php
include "Stack.php";

$stack = new Stack(10);

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

$stack->pop();
$stack->pop();
$stack->pop();

$stack->push(6);
$stack->push(7);

var_dump($stack->isEmpty());

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack->isEmpty());