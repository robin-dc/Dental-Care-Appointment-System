<?php

    $conn = new mysqli('localhost', 'root', '', 'dental_care');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>