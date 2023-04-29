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



<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Blog title" required><br>
    <input type="text" placeholder="image link" name="image" required><br>
    <textarea name="content" id="content" cols="100" rows="10" placeholder="Write here!"  required></textarea><br>

    <div id="error">If any error occurs, use this div to display it!, otherwise display nothing</div>

    <input id="submit" type="submit" name="submit" value="Update">

</form>
<?php
$servername = "localhost";                 //Establishing the database connection
$dbUsername = "root";
$dbPassword = "";
$dbName = "mwd";
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check for form submission

$id = $_GET["id"];

if(isset($_POST['title'])) {
    $title = $_POST['title'];
} else {
    $title = '';
}

if(isset($_POST['image'])) {
    $image_link = $_POST['image'];
} else {
    $image_link = '';
}

if(isset($_POST['content'])) {
    $content = $_POST['content'];
} else {
    $content = '';
}


// Validate image link using regex

$pattern = '/^(http|https):\/\/.+?\.(gif|jpe?g|tiff?|png|webp|bmp)$/i';
if (!preg_match($pattern, $image_link)) {
    // Invalid image link
    echo "Invalid image link";
    exit();
}
if (isset($id))
{
    // Update post in database
    $sql = "UPDATE blog_posts SET title='$title', image_link='$image_link', content='$content' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        // Success
        echo "Post updated successfully";
    } else {
        // Error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Close database connection
$conn->close();
?>



</body>
</html>