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
    <input type="submit" id="left" name="left" value="small than">
    <input type="submit" id="exactly" name="exactly" value="exactly">
    <input type="submit" id="right" name="right" value="big than">
</form>
<?php
$low = 1;
$high = 100;
$number = mt_rand($low,$high);
echo $number;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_REQUEST == "left"){
        $high = $number;
        $number = mt_rand($low,$high);
        echo $number;
    }
}
?>
</body>
</html>