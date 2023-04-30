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
    <?php
    if(isset($_GET['success'])) {
        echo "<div class='title'>Event successfully added.</div>";
    }
    else if(isset($_GET['error'])) {
        echo "<div class='title'>Invalid image link.</div>";
    }

    ?>

    <div style="width:100%; margin-bottom:5%">

        <?php

            if(isset($_SESSION['privilege']) && $_SESSION['privilege'] == 1) {
                echo '    <form action="../backend/create-event.php" method="post" id="admin-only"><input type="text" name="node" placeholder="Title" required><input id="date" type="date" name="date" placeholder="Date" required><input id="image" type="text" name="link" placeholder="image link" required><br><input id="submit" type="submit" value="Post" name="Submit"></form>';
            }
        ?>

    </div>
    <!--container div-->
    <div id="container">
    </div>
    <?php

//    <div class='node'>
//    <div class='circle'>
//        <img src='img.png'/>
//    </div>
//    <p class='title'>title</p>
//</div>

    include 'database.php';

    $sql = "SELECT * FROM events ORDER BY date ASC";
    $result = mysqli_query($conn, $sql);

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='node'>";
            echo "<img class='circle' src='" . $row['image_link']."'/>";
            echo "<p class='title'>". $row['title'] ."</p>";
            echo "<p class='title'>". "| " . $row['date'] ."</p>";

            if(isset($_SESSION['privilege'])){
                if($_SESSION['privilege'] == 1) {
                    echo "<a class='delete' href='../backend/delete-event.php?id=". $row['id'] ."'> <img src='../resources/delete-btn.svg' width=20% alt='delete'/> </a>";
                }
            }
            echo "</div>";

        }
    }

    ?>


    </body>
</html>