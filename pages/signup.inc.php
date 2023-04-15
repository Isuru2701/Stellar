<?php

if (isset($_POST['submit']))
{
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $passwordRepeat = $_POST['confirm_password'];

   require_once 'database.php';
   require_once 'functions.php';

   if(emptyInputSignup($username, $email, $password, $passwordRepeat) !== false){
    header("location:Signup.php?error=emptyinput");
    exit();
 }

 if(invalidUsername($username) !== false){
    header("location:Signup.php?error=invalidusername");
    exit();
 }

 if(invalidEmail($email) !== false){
    header("location:Signup.php?error=invalidemail");
    exit();
 }

 if(pwdMatch($password,$passwordRepeat) !== false){
    header("location:Signup.php?error=incorrectpassword");
    exit();
 }
 if(usernameExists($conn, $username, $email) !== false){
    header("location:Signup.php?error=usernametaken");
    exit();
 }

 createUser($conn, $username, $email, $password);

}
else
{
    header("location:Signup.php");
}