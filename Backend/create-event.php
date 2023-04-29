<?php

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

    $stmt = $con->prepare("INSERT INTO events (title, date, link) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $date, $link);
    $stmt->execute();
    $stmt->close();
    $con->close();

    header("location:../pages/timeline.php");
    exit();

}