<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/signup.css">
    
</head>

<body>
    
<div class="container">
    <div class="form signup">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="POST">
        <div class="input-box">
            <input type="text" name="username" required>
            <i class="fa-regular fa-user"></i>
            <span>Username</span>
        </div>

        <div class="input-box">
            <input type="text" name="email" required>
            <i class="fa-regular fa-envelope"></i>
            <span>Email Address</span>
        </div>

        <div class="input-box">
            <input type="password" name="password" required>
            <i class="fa-solid fa-lock"></i>
            <span>Create Password</span>
        </div>

        <div class="input-box">
            <input type="password" name="confirm_password" required>
            <i class="fa-solid fa-lock"></i>
            <span>Confirm Password</span>
        </div>

        <div class="input-box">
            <input type="submit" name="submit" value="Create Account">
        </div>
        <?php
           if (isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all Fields!</p>";
              }
              else if($_GET["error"] == "invalidusername"){
                echo "<p>Choose a proper username!</p>";
              }
              else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
              }
              else if($_GET["error"] == "incorrectpassword"){
                echo "<p>Passwords dont match my guy!</p>";
              }
              else if($_GET["error"] == "usernametaken"){
                echo "<p>Username is already taken!</p>";
              }
              else if($_GET["error"] == "stmtfailed!"){
                echo "<p>Something went wrong, try again!</p>";
              }
              else if($_GET["error"] == "none"){
                echo "<p>Account Created!</p>";
              }
           }
        ?>
        
        <p>Already have an account? <a href="index.html" class="signin">Sign In</a></p>
        </form>
    </div>
</div>

</body>

</html>