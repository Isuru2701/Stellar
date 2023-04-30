<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/forum.css">
    <link rel="stylesheet" href="../styles/create.css">
    <link rel="icon" href="../resources/favicon.ico" type="image/ico">

    <title>Create a blogpost</title>
</head>
<body>

<?php include '../pages/header.php';?>
<br>



<form method="POST" enctype="multipart/form-data">

    <?php
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "mwd";
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

        $sql = "select * from blog_posts where id =" . $_GET['id']. ";";;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo '<input type="text" name="title" placeholder="Blog title" value="'. $row['title'] .'" required><br>';
        echo '<input type="text" placeholder="image link" name="image" value="'. $row['image_link'] .'" required><br>';
        echo '<textarea name="content" id="content" cols="100" rows="10" placeholder="Write here!"  required>'.$row['content'].'</textarea><br>';

        ?>

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
        header("Location: ../pages/forum.php");
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