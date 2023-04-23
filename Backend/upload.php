<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for form submission
if (isset($_POST['submit'])) {
  // Get form data
  $title = $_POST['title'];
  $image_link = $_POST['image_link'];
  $content = $_POST['content'];


  $pattern = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|]/i';
  if (!preg_match($pattern, $image_link)) {
    echo "Invalid image link";
    exit();
  }
  $sql = "INSERT INTO blog_posts (title, image_link, content) VALUES ('$title', '$image_link', '$content')";
  if ($conn->query($sql) === TRUE) {
    echo "Post added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
