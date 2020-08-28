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
    <textarea id="sdt" name="sdt"></textarea>
    <input type="submit">
</form>
<?php
$viettel = [];
$vinaphone = [];
$mobiphone = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sdt = $_POST["sdt"];
        if ($sdt[1] == 1){
            array_push($viettel,$sdt);
        } elseif ($sdt[1] == 2){
            array_push($vinaphone,$sdt);
        } elseif ($sdt[1] == 3) {
            array_push($mobiphone, $sdt);
        }
}
?>
<table>
    <tr>
        <th>Viettel</th>
        <?php foreach ($viettel as $sdt){ ?>
        <td><?php echo $sdt; ?></td>
        <?php } ?>
    </tr>
    <tr>
        <th>Vinaphone</th>
        <?php foreach ($vinaphone as $sdt){ ?>
            <td><?php echo $sdt; ?></td>
        <?php } ?>
    </tr>
    <tr>
        <th>Mobiphone</th>
        <?php foreach ($mobiphone as $sdt){ ?>
            <td><?php echo $sdt; ?></td>
        <?php } ?>
    </tr>
</table>
</body>
</html>