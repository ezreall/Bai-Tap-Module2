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
    Name:<input id="name" type="text" name="name"><br>
    Email:<input id="email" type="text" name="email"><br>
    Phone:<input id="phone" type="text" name="phone"><br>
    <input type="submit" id="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
}
if (empty($name) || empty($email) || empty($phone)){
    echo "khong duoc de trong";
} elseif (filter_var($email,FILTER_VALIDATE_EMAIL)){

}
?>
</body>
</html>
