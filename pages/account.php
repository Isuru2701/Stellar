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
            <img id="profile-pic-view" src="../resources/example-profile.jpg" alt="default">
        </span>

        <!-- php echo the appropriate data from the session cache here -->
        <span style="margin-top: 30px">
            <h1>USERNAME</h1>
            <h1>ACCOUNT TYPE </h1>

            <form method="post" action="../backend/change-pfp.php">
                <input type="url" name="image-link" placeholder="Image link">
                <input type="submit" name="submit" value="Change profile picture">
            </form>
        </span>
    </div>

</body>
</html>