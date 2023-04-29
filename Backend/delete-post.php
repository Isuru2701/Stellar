<?php

$servername = "localhost";                 //Establishing the database connection
$dbUsername = "root";
$dbPassword = "";
$dbName = "mwd";
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM blog_posts WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {

        echo "Post deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>