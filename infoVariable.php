<?php
session_start();

$category = $_SESSION['my_variable'];

$_SESSION['user'] = $_POST['user'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['desc'] = $_POST['desc'];
$_SESSION['my_variable'] = $category;

echo "The values are: " . $_SESSION['user'] . $_SESSION['email'] . $_SESSION['phone'] . $_SESSION['address'] . $_SESSION['desc'] . $category;
?>