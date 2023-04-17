<!DOCTYPE html>

<!--

    This is a page that will be dynamically rendered when a title in forum.html is clicked.
    
    - Fetch article from db for entry_id
    - Fetch images if any
    - Fetch comments from other users
    - Allow editing of pages if entry_author = current_user & is_admin
    - Allow users to add comments
    - Any comment can be deleted by an admin, but users can only delete their own comments

    

-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar</title>

    <!-- re-using forum's css-->
    <link rel="stylesheet" href="../styles/forum.css">
    <link rel="stylesheet" href="../styles/article.css">
</head>
<body>

    <header class="navbar">
        <h1 style="margin-left:30px">Stellar</h1>
        <a id="home" href="" style="margin-top: 15%;"><img src="../resources/thumb.png" alt="rect" width="20"/> Home</a>
        <a id="timeline" href="timeline.html" style="margin-top: 15%"><img src="../resources/thumb.png" alt="rect" width="20"/> Timeline</a>
        <a id="forum" href="forum.html" style="margin-top: 30%"><img src="../resources/thumb.png" alt="rect" width="20"/> Blog</a>
        <img src="../resources/expander.png" style="margin-top:20px; margin-left:20px; width: 40px;"/>
        <div style="display:flex">
            <img class="pfp" src="../resources/example-profile.jpg"  alt="profile-pic"/>
            <div id="profile">UserName <br>
                <a id="forum" href="" style="margin-top: 20%; font-style:italic; font-weight:lighter;"> Logout</a>
            </div>
        </div> 

    </header>
    <hr>


    <!-- the templating -->
    <div class="title">
        title goes here
    </div>
    <div class="info-bar">
        User | Date
    </div>
    <div id="cover-image">
        <img src="../resources/pawel-nolbert-62OK9xwVA0c-unsplash.jpg" alt="cover-image">
    </div>
    <div class="post">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales massa ut tristique aliquam. Integer egestas venenatis bibendum. Maecenas sed mattis massa. Nam accumsan felis ac ipsum ultrices, a eleifend ante condimentum. Etiam imperdiet vitae nibh quis finibus. Maecenas molestie mauris venenatis rhoncus viverra. Aliquam semper libero ut nibh sagittis tristique. Praesent vitae arcu vitae risus tristique sagittis vel in libero. Etiam aliquam risus mi, nec sodales lorem maximus sit amet. Vestibulum id commodo ante, ut pulvinar libero. Nam efficitur neque quis nibh eleifend posuere. Nulla ac vulputate nibh, vitae pharetra ligula. Sed vulputate mauris dui, sed gravida lorem lacinia eget.</p>   
<p>Integer cursus magna et suscipit condimentum. In porttitor ex id sem pharetra, id maximus velit vulputate. In in felis nec leo lobortis maximus at non leo. Donec in iaculis nulla. Fusce posuere pellentesque sapien, vel ullamcorper odio ultricies eget. In vel leo diam. Integer ut ipsum dignissim, elementum lectus sed, vulputate lorem. Etiam in tincidunt enim, eu scelerisque mi. Nunc id aliquam neque. Fusce consequat augue lectus, vel molestie arcu pellentesque eget.</p>
<p>Donec sodales, felis iaculis venenatis tristique, leo dui interdum orci, congue vulputate purus erat in ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse sapien est, sodales quis faucibus nec, aliquam non metus. Integer interdum commodo neque, ac tincidunt tellus fringilla a. Curabitur non malesuada lectus, at maximus tortor. Nunc posuere nunc a nisi laoreet, nec bibendum nibh lacinia. Integer feugiat sem sit amet sem luctus bibendum. Etiam volutpat euismod gravida. Nunc pretium, nisi ut viverra posuere, quam mi scelerisque libero, quis accumsan nulla est ut tellus. Donec eleifend sem ante, a sollicitudin nisi suscipit in. Proin consectetur laoreet risus, a ornare dolor.</p>

    </div>

    <hr>

    <!--container for comments-->
    <div id="comments">
        <br>
        <button class="add-comment"> add comment</button>
        <br>
        <br>

        <div class="comment">
            <span class="commenter-pfp">
                <img src="../resources/example-profile.jpg" alt="comment author">
            </span>
            <span>
                <div class="commenter">
                    User | Date
                </div> 
                <div class="text">
                    Wow, this post is so great!
                </div>
            </span>
        </div>
    </div>

    
</body>
</html>