<?php
$servername = "localhost";                 //Establishing the database connection
$dbUsername = "root";
$dbPassword = "";
$dbName = "mwd";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}

?>
  