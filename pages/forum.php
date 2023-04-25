<!DOCTYPE html>

<!--

    A blog to post space-related topics.
    admins can make entries to the forum.
    Users can comment on posts.
    Admins can delete any entry or comment.

    Clicking on a tile will redirect to a page where the content is rendered using the data in the db.

    


-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forum</title>
    <link rel="stylesheet" href="../styles/forum.css">

    <!--particle library-->
    <script src="../js/particles.js"></script>
    <script>
        particlesJS.load('particles', '../resources/particles.json', function() {
            console.log('particles.js loaded');
          });
    </script>

    <script defer>
        const canvas = document.querySelector('particles');

    // Function to resize the canvas
    function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    }

    
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();
    </script>


</head>


<body>

    <?php include 'header.php';?>
    <br>
    <a href="create.html" id="add-post">
        create new post &nbsp; + 
    </a>

    <!--contains all the entries within-->
        <div id="container">
            

            <!-- these are example entries. These will be generate by the js/php when it's fetched-->
            <div class="entry">
                <div class="title"><a href="article.php">Title</a>
                </div>

                <div class="admin-only">
                <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                </div>

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

            </div>

            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>


            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>
    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>

            
            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>
    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>


            
            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>
    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>


            
            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>
    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>


            <div class="entry">
                <div class="title"><a href="article.php">Title</a></div>

                <div class="admin-only">
                    <button class="edit"><img src="../resources/edit-btn.svg" alt="edit" width="40%"></button>
                    <button class="delete"><img src="../resources/delete-btn.svg" alt="edit" width="40%"></button>    
                    </div>
    

                <div class="info-bar">By User | Date</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>



        </div>
        <div id="particles"></div>


</body>

</html>
