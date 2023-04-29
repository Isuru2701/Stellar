<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/forum.css">
    <link rel="stylesheet" href="../styles/create.css">

    <title>Create a blogpost</title>
</head>
<body>

<?php include '../pages/header.php';?>
<br>


<form method="POST" src="" action="upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Blog title" required><br>
    <input type="text" placeholder="image link" name="image" required><br>
    <textarea name="content" id="content" cols="100" rows="10" placeholder="Write here!"  required></textarea><br>

    <div id="error">If any error occurs, use this div to display it!, otherwise display nothing</div>

    <input id="submit" type="submit" name="submit" value="Update">

</form>

</body>
</html>
