<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="../styles/create.css">
    <link rel="stylesheet" href="../styles/account.css">
</head>
<body>

<?php
    include 'header.php';
?>

    <div style="display: grid; grid-template-columns: 35% 65%; width: 100%">
        <span>
            <?php

                $link = $_SESSION['image'];
                echo "<img id='profile-pic-view' src=$link alt='default'>";

            ?>
        </span>

        <!-- php echo the appropriate data from the session cache here -->
        <span style="margin-top: 30px">
            <?php
            $name = $_SESSION['username'];
            $id = $_SESSION['userid'];
            echo "<h1>$name</h1>";
            if($_SESSION['privilege'] == 1) {
                echo "<h1>Admin</h1>";
            }
            else {
                echo "<h1>Standard User</h1>";
            }

            echo "<h6>Account ID: $id</h6>";

             ?>



            <form method="post" action="../backend/change-pfp.php">
                <input type="url" name="image-link" placeholder="Image link" required>
                <input type="submit" name="submit" value="Change profile picture">
            </form>
        </span>
    </div>



</body>
</html>