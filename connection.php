<?php
    // connection to database
    $conn = mysqli_connect('localhost', 'root', '', 'dental_care');

    //check connection
    if(!$conn){
        echo 'Connection error'. mysqli_connect_error();
    }
?>
