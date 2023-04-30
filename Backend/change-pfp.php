<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "mwd";

if(isset($_POST['submit'])) {
    $value = $_POST['submit'];
    $link = trim($_POST['image-link']);

    $id = $_SESSION['userid'];

    $conn = new mysqli($server, $username, $password, $dbname);

    if (!preg_match('/\.(jpg|jpeg|png|gif)$/i', $link)) {
        header("location:../pages/account.php?error=1");
        exit();
    }
    $stmt = $conn->prepare("UPDATE users SET image_link = ? WHERE userId = ?");
    $stmt->bind_param("si", $link, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    $_SESSION['image'] = $link;

    header("Location: ../pages/account.php");
    echo "<script> alert($value) </script>";
    exit();
}