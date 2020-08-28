<?php
include_once "Dancer.php";
include_once "Manager.php";

$manager = new Manager();
$dancer1 = new Dancer('A','male');
$dancer2 = new Dancer('B','male');
$dancer3 = new Dancer('C','male');
$dancer4 = new Dancer('D','male');
$dancer5 = new Dancer('E','female');
$dancer6 = new Dancer('F','female');
$dancer7 = new Dancer('G','female');

$manager->addDancer($dancer1);
$manager->addDancer($dancer2);
$manager->addDancer($dancer3);
$manager->addDancer($dancer4);
$manager->addDancer($dancer5);
$manager->addDancer($dancer6);
$manager->addDancer($dancer7);

$status = false;
while (!$status){
    $status = $manager->maleQueue->isEmpty() || $manager->femaleQueue->isEmpty();
    if ($status){
        echo "Wait a minute....";
    } else {
        $manager->setCouple();
    }
}

echo '<pre>';
print_r($manager->showCouples());
echo '<pre>';