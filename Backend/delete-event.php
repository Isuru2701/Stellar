<?php

$servername = "localhost";                 //Establishing the database connection
$dbUsername = "root";
$dbPassword = "";
$dbName = "mwd";
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM events WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {

        header('Location: ../pages/timeline.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>