<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../resources/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="../styles/forum.css">
    <link rel="stylesheet" href="../styles/create.css">

    <title>Create a blogpost</title>
</head>
<body>

<?php include 'header.php';?>
  <br>

    <?php
        if(isset($_GET['success'])) {
            echo "<div class='success'>Your post has been created!</div>";
        }
        else if(isset($_GET['error'])) {
            echo "<div class='error'>Something went wrong!</div>";
        }
    ?>

    <form method="POST" action="../backend/create-post.php" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Blog title" required><br>
        <input type="text" placeholder="image link" name="image" required><br>
        <textarea name="content" id="content" cols="100" rows="10" placeholder="Write here!"  required></textarea><br>



        <input id="submit" type="submit" name="submit" value="Upload">

    </form>
    
</body>
</html>
