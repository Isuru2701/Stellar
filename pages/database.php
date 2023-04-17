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

   
                                            //Establishing the forum connection
    $conn = mysqli_connect("localhost","root","","Blog_Forum");

    $sql= "SELECT * FROM data";
    $query = mysqli_query($conn,$sql);

   if(isset($_REQUEST["new_post"])){
       $title = $_REQUEST["title"];
       $content =$_REQUEST["content"];

       $sql = "Insert INTO data(title, content) values ('$title','$content')";
       mysqli_query($conn,$sql); 

       header("location: index.php?info=added");
       exit();
   }

?>
  