<?php
if (isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $pwd = $_POST["password"];
     
     require_once 'database.php';
     require_once 'functions.php';

     if(emptyInputLogin($username, $pwd) !== false){
        header("location:index.php?error=emptyinput");
        exit();
     } 

     loginUser($conn, $username, $pwd);

    }
    else{
        header("location:index.php?");
        exit();    
    }