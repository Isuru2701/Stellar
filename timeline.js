
/*
generation logic for the timeline.

The timeline is a page where the user can see upcoming space
related events, such as rocket launches, eclipses, cosmic events, etc.
These events will be called 'nodes'.

These nodes must be added by an admin. (TODO: check session ID, and generate '+' button at the end of the line)
They will be stored in a database, and will be retrieved to the client-side.

The structure of the node is as such:
<hexagon><img/></hexagon> <title>

this entire construct is a div, with the class 'node'.
the hexagon is a div inside it, and the img is a background image of this.

<div class='node'>
    <div class='hexagon'>
        <img src='img.png'/>
    </div>
    <p class='title'>title</p> 
</div>





*/

//for now it'll add 10 nodes that I hardcoded. later it'll be retrieved from the database.


var node = document.createElement("div");

node.className = 'node';
node.html
document.body.appendChild(node);
