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
    Canh 1:<input type="number" id="side1" name="side1"><br>
    Canh 2:<input type="number" id="side2" name="side2"><br>
    Canh 3:<input type="number" id="side3" name="side3"><br>
    <input type="submit" value="Hien thi">
</form>
</body>
<?php
include 'Triangle.php';
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
}
$triangle = new Triangle($side1, $side2, $side3);
if ($side1 <= 0 || $side2 <= 0 || $side3 <= 0) {
    echo "canh cua tam giac phai la cac so nguyen duong";
} elseif ($side1 + $side2 <= $side3 || $side3 + $side1 <= $side2 || $side3 + $side2 <= $side1) {
    echo "day khong phai 3 canh cua 1 tam giac";
} else {
    echo $triangle;
}
?>
</html>