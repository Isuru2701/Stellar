<?php
session_start();
?>
<!-- 
    contains the universal navbar for the website
    to include the navbar in a page, use the following code:

    <object type="text/html" data="header.html" width="100%"></object>
    <br>

    the <br> might be necessary to prevent the navbar from overlapping the content of the page
    the width is def important otherwise the navbar will collapse to the left.

    the styles will be included alongside the html code here.
    scroll down for the html :)
-->
<link rel="stylesheet" href="../styles/header.css">

<header class="navbar">
    <h1 style="margin-left:30px; color:#ffffff">Stellar</h1>
    <a id="home" href="home.php" target="_top" style="margin-top: 15%;"><img src="../resources/thumb.png" alt="rect" width="20"/> Home</a>
    <a id="timeline" href="timeline.php" target="_top" style="margin-top: 15%"><img src="../resources/thumb.png" alt="rect" width="20"/> Timeline</a>
    <a id="forum" href="forum.php" target="_top" style="margin-top: 30%"><img src="../resources/thumb.png" alt="rect" width="20"/> Blog</a>
    <img src="../resources/expander.png" style="margin-top:20px; margin-left:20px; width: 40px;"/>
    <?php
if (isset($_SESSION["username"])) 
{
    $link = $_SESSION['image'];
    $name = $_SESSION['username'];

    echo '<div style="display:flex">';
    echo "<img class='pfp' src=$link alt='profile pic'>";
    echo "<div id='profile'><a href='account.php'> $name </a><br>";
    echo '<a href="logout.php" id="logout"> Logout</a>';
    echo '</div>';
    echo '</div>';
}
else
{
    echo '<div id="login">';
    echo '<a id="Signup" href="Signup.php" target="_top" style="margin-top: 15%">Sign up</a>';
    echo '<br>';
    echo '<a id="Login" href="index.php" target="_top" style="margin-top: 15%">Login</a>';
    echo '</div>';
}


?>
</header>
<hr>
