<?php
    session_start();

    $aided = $_SESSION['my_variable'];

    $_SESSION['category'] = $_POST['category'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['desc'] = $_POST['desc'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['time'] = $_POST['time'];
    $_SESSION['my_variable'] = $aided;

    $category = $_SESSION['my_variable'];
    $names = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $desc = $_SESSION['desc'];
    $date = $_SESSION['date'];
    $time = $_SESSION['time'];

    include 'newConnection.php';

    $sql3 = "DELETE FROM appointment_tb WHERE name = '$names' AND email = '$email' AND date = '$date' AND time = '$time'
    ";
    if ($conn->query($sql3) === TRUE) {
    echo "Data deleted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    $conn->close();
?>
