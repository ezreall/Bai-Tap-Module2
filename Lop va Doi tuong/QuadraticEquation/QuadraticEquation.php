<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap a:<input type="number" id="a" name="a"><br>
    Nhap b:<input type="number" id="b" name="b"><br>
    Nhap c:<input type="number" id="c" name="c"><br>
    <input type="submit">
</form>
<?php
include ("Quadratic.php");
$a = NULL;
$b = NULL;
$c = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
}
$quadratic = new Quadratic($a,$b,$c);
//echo $quadratic->getDiscriminant();
if ($quadratic->getDiscriminant() > 0){
    echo $quadratic->getRoot1()."<br>";
    echo $quadratic->getRoot2();
} elseif ($quadratic->getDiscriminant() === 0){
    echo $quadratic->getRoot1();
} else {
    echo "The equation has no roots";
}
?>
</body>
</html>