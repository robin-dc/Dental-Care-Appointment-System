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

    // echo "The values are: " . $_SESSION['id'] . $_SESSION['category'] . $_SESSION['name'] . $_SESSION['email'] . $_SESSION['phone'] . $_SESSION['address'] . $_SESSION['desc'] . $_SESSION['date'] . $_SESSION['time'];

    include 'newConnection.php';

    // SQL query with variables from both files
    $sql = "INSERT INTO aided_tb (category, name, email, phone, address, description, date, time ) VALUES ('$category', '$names', '$email', '$phone', '$address', '$desc', '$date', '$time')";

    $sql2 = "DELETE FROM appointment_tb WHERE name = '$names'";
    $sql3 = "ALTER TABLE appointment_tb AUTO_INCREMENT = 1";
    $sql4 = "SET @count = 0";
    $sql5 = "UPDATE appointment_tb SET id = @count:= @count + 1 ORDER BY id
            ";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
    if ($conn->query($sql2) === TRUE) {
        echo "Data deleted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
    if ($conn->query($sql3) === TRUE) {
        echo "Data altered successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
    if ($conn->query($sql4) === TRUE) {
        echo "Data ID updated successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
    $conn->close();

?>
