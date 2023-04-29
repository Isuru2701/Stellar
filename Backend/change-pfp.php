<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "mwd";

if(isset($_POST['submit'])) {
    $link = trim($_POST['image-link']);
    echo $_SESSION['userid'];
    $id = $_SESSION['userid'];

//    $conn = new mysqli($server, $username, $password, $dbname);
//
//    $stmt = $conn->prepare("UPDATE users SET image_link = ? WHERE userId = ?");
//    $stmt->bind_param("si", $link, $id);
//    $stmt->execute();
//    $stmt->close();
//    $conn->close();

    $_SESSION['image'] = $link;

//    header("Location: ../pages/account.php?success=profilepicturechanged");
    exit();
}