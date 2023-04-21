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
    <a id="home" href="" target="_top" style="margin-top: 15%;"><img src="../resources/thumb.png" alt="rect" width="20"/> Home</a>
    <a id="timeline" href="timeline.html" target="_top" style="margin-top: 15%"><img src="../resources/thumb.png" alt="rect" width="20"/> Timeline</a>
    <a id="forum" href="forum.html" target="_top" style="margin-top: 30%"><img src="../resources/thumb.png" alt="rect" width="20"/> Blog</a>
    <img src="../resources/expander.png" style="margin-top:20px; margin-left:20px; width: 40px;"/>

    <div style="display:flex">
                <img class="pfp" src="../resources/example-profile.jpg"  alt="profile-pic"/>
    <div id="profile">UserName <br>

        <!--logout button is here @MesQue1041-->
         <button id="logout"> Logout</button>

         
        </div>
    </div> 
    
</header>
<hr>
