
/*
generation logic for the timeline.

The timeline is a page where the user can see upcoming space
related events, such as rocket launches, eclipses, cosmic events, etc.
These events will be called 'nodes'.

These nodes must be added by an admin. (TODO: check session ID, and generate '+' button at the end of the line)
They will be stored in a database, and will be retrieved to the client-side.

The structure of the node is as such:
<circle><img/></circle> <title>

this entire construct is a div, with the class 'node'.
the circle is a div inside it, and the img is a background image of this.

<div class='node'>
    <div class='circle'>
        <img src='img.png'/>
    </div>
    <p class='title'>title</p> 
</div>



circle will be a square div with the circle pattern.

*/

//for now it'll add 10 nodes that I hardcoded.
//later it'll be retrieved from the database.

for(let i = 0; i < 10; i++){
    //add a node
    const node = document.createElement("div");
    node.className = 'node';
    node.innerHTML = "<div class='circle'><img src='' height=100px width=100px alt='image'/></div><p class='title'>title | Date of event</p> <button class='edit'> <img src='../resources/edit-btn.svg' width=20% alt='edit'/> </button>  <button class='edit'> <img src='../resources/delete-btn.svg' width=20% alt='delete'/> </button> "
    document.getElementById('container').appendChild(node);
}