<?php
session_start();

$conn = new mysqli("localhost","root","","mwd");

if(isset($_POST['submit'])) {
    $pattern = '/^(http|https):\/\/.+?\.(gif|jpe?g|tiff?|png|webp|bmp)$/i';

    $title = $_POST["title"];
    $content = $_POST["content"];
    $image = $_POST["image"];


    $sql = "Insert INTO blog_posts(title, image_link, content, authorId) values (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd", $title,$image, $content, $_SESSION['userid']);
    $stmt->execute();


    $stmt->close();
    $conn->close();
    header("location: ../pages/forum.php");
    exit();

}