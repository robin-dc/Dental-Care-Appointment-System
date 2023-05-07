<?php
// ================================== ROBIN =============================
session_start();

$dateInput = $_POST['dateInput'];

include 'newConnection.php';

$sql = "SELECT date, time FROM appointment_tb";
$result = $conn->query($sql);

$txt = "";
$txt1 = "none";
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $columnDate = $row['date'];
        $columnTime = $row['time'];

        if (stripos($columnDate, $dateInput) !== false) {
            $txt .= $columnTime . ",";
        }
    }
    echo $txt;
} else {
    echo $txt1;
}

$conn->close();
?>
