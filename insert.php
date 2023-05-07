<?php
    session_start();
    $category = $_SESSION['my_variable'];
    $names = $_SESSION['user'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $desc = $_SESSION['desc'];
    $date = $_SESSION['date'];
    $time = $_SESSION['time'];

    include 'newConnection.php';

    // SQL query with variables from both files
    $sql = "INSERT INTO appointment_tb (category, name, email, phone, address, description, date, time ) VALUES ('$category', '$names', '$email', '$phone', '$address', '$desc', '$date', '$time')";
    $sql1 = "INSERT INTO patients_tb (category, name, email, phone, address, description, date, time ) VALUES ('$category', '$names', '$email', '$phone', '$address', '$desc', '$date', '$time')";
    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    if ($conn->query($sql1) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    // Close connection
    $conn->close();
?>
