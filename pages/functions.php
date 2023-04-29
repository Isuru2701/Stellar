<?php
function emptyInputSignup($username, $email, $password, $passwordRepeat)
{
   $result = "";   
   if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
         $result = true;
   }
   else
   {
    $result = false;
   }

   return $result;
}

function invalidUsername($username)
{
    $result = "";
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email)
{
    $result = "";
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    
    return $result;
}

function pwdMatch($password,$passwordRepeat)
{
    $result = "";
    
    if ($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    
    return $result;
}

function usernameExists($conn, $username, $email)
{
    //Created a template
     $sql = "SELECT * FROM users where userName = ? OR userEmail = ?;";
     //Create a prepared statement
     $stmt = mysqli_stmt_init($conn);
     //Prepare the prepared statement
     if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location:Signup.php?error=stmtfailed");
       exit();
     }
     
     //Bind paramters to the placeholder
     mysqli_stmt_bind_param($stmt, "ss", $username, $email);
     //Execute the prepared statement
     mysqli_stmt_execute($stmt);

     //Fetch the result of the prepared statement
     $resultData = mysqli_stmt_get_result($stmt);

     if($row = mysqli_fetch_assoc($resultData))
     {
        return $row;

     }
     else{
        $result = false;
        return $result;
     }

     mysqli_stmt_close($stmt);
    
}

function createUser($conn, $username, $email, $password)
{
     $sql = "INSERT INTO users (userName, userEmail, userPwd, privilege) VALUES (?, ?, ?, false);";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location:Signup.php?error=stmtfailed");
       exit();
     }
     
     $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
    header("location:index.php");

    exit();

}

function emptyInputLogin($username, $password)
{
   $result = "";   
   if(empty($username) || empty($password)){
         $result = true;
   }
   else
   {
    $result = false;
   }

   return $result;
}

function loginUser($conn, $username, $password)
{
    $usernameIsThere = usernameExists($conn, $username, $username);
    
    if($usernameIsThere == false){
        header("Location: index.php?error=wronglogin");
        exit();
    } 

    $pwdHashed = $usernameIsThere["userPwd" ];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false){
        header("Location: index.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $usernameIsThere["userId"];
        $_SESSION["username"] = $usernameIsThere["userName"];
        $_SESSION["privilege"] = $usernameIsThere["privilege"];
        $_SESSION["image"] = $usernameIsThere["image_link"];
        header("Location: home.php");
        exit();


    }
}