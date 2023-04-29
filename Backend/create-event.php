<?php
session_start();
if(isset($_POST['Submit'])) {

    if(empty('node') || empty('date') || empty ('link')) {
        echo "<div class='title'></div>";
        exit();
    }

    if (!preg_match('/\.(jpg|jpeg|png|gif)$/i', $_POST['link'])) {
        echo "<div class='title'>The link is not an image link.</div>";
        exit();
    }

    addToDb($_POST['node'], $_POST['date'], $_POST['link']);

}

function addToDb($title, $date, $link) {
    $server = "localhost";
    $username = "root";
    $passwd = "";
    $db =  "mwd";

    $con = new mysqli($server, $username, $passwd, $db);

    //TODO: PROBLEM WITH THE SESSION

    $stmt = $con->prepare("INSERT INTO events (title, date, image_link, authorId) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $title, $date, $link, $_SESSION['userid']);
    $stmt->execute();
    $stmt->close();
    $con->close();

    header("location:../pages/timeline.php?success=1");
    exit();

}