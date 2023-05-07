<?php
session_start();

$_SESSION['my_variable'] = $_POST['my_variable'];
// Do something with the variable here, for example:

echo $_SESSION['my_variable'];
?>
