<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="../styles/timeline.css">
    <title>Timeline</title>
</head>
<body>

    <?php include 'header.php' ?>

    <!--TODO: add a form to add a node-->
    <div style="width:100%; margin-bottom:5%">
    <form action="../backend/create-event.php" method="post" id="admin-only">

        <input type="text" name="node" placeholder="Title" required>
        <input id="date" type="date" name="date" placeholder="Date" required>
        <input id="image" type="text" name="link" placeholder="image link" required>
        <br>
        <input id="submit" type="submit" value="Post" name="Submit">
    </form>
    </div>
    <!--container div-->
    <div id="container">
    </div>
    <script src="../js/timeline.js"></script>
    
    </body>
</html>