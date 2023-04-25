<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="../styles/timeline.css">
    <title>Timeline</title>
</head>
<body>

    <object type="text/html" data="header.html" width="100%"></object>
    <br>

    <!--TODO: add a form to add a node-->
    <div style="width:100%; margin-bottom:5%">
    <form action="" method="post">

        <input type="text" name="node" placeholder="Title">
        <input id="date" type="date" name="date" placeholder="Date">
        <input id="image" type="text" name="date" placeholder="image link">
        <br>
        <input id="submit" type="submit" value="Post">
    </form>
    </div>
    <!--container div-->
    <div id="container">
    </div>
    <script src="../js/timeline.js"></script>
    
    </body>
</html>