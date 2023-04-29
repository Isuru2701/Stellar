<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mwd";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for form submission
if (isset($_POST['submit']) && isset($_SESSION['username'])) {
    // Get form data
    $image_link = $_POST['image_link'];


    //check if link is an image link
    $pattern = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|]/i';
    if (!preg_match($pattern, $image_link)) {
        echo "Invalid image link";
        exit();
    }
    $sql = "";
    if ($conn->query($sql) === TRUE) {
        echo "Post added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
