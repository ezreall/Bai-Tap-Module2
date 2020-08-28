<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly nhan su</title>
</head>
<body>
<form method="post">
    <input type="text" id="name" name="name" placeholder="Name">
    <input type="text" id="age" name="age" placeholder="Age">
    <input type="text" id="address" name="address" placeholder="Address">
    <input type="text" id="position" name="position" placeholder="Position">
    <input type="submit" value="Add">
</form>
<?php
include_once "Employee.php";
include_once "EmployeeManager.php";

$employees = [];
$manager = new EmployeeManager($employees);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $address = $_REQUEST["address"];
    $position = $_REQUEST["position"];
}

$employee = [
    "name" => $name,
    "age" => $age,
    "address" => $address,
    "position" => $position
];

$manager->add($employee);
?>
<table style="border: 1px solid; border-collapse: collapse">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    <?php if (isset($employees)):?>
    <?php foreach ($employees as $employee): ?>
    <tr>
        <th><?php echo $employee->id ?></th>
        <th><?php echo $employee->name ?></th>
        <th><?php echo $employee->age ?></th>
        <th><?php echo $employee->address ?></th>
        <th><?php echo $employee->position ?></th>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">No Data</td>
        </tr>
    <?php endif; ?>
</table>
</body>
</html>