<?php
session_start();

$name = $_SESSION['user'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$desc = $_SESSION['desc'];
$category = $_SESSION['my_variable'];

$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
$_SESSION['user'] = $name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['address'] = $address;
$_SESSION['desc'] = $desc;
$_SESSION['my_variable'] = $category;

echo "The values are: " . $_SESSION['date'] . $_SESSION['time'] . $name . $email . $phone . $address . $desc . $category;


?>
