
/*
generation logic for the timeline.

The timeline is a page where the user can see upcoming space
related events, such as rocket launches, eclipses, cosmic events, etc.
These events will be called 'nodes'.

These nodes must be added by an admin. (TODO: check session ID, and generate '+' button at the end of the line)
They will be stored in a database, and will be retrieved to the client-side.







*/

var node = document.createElement("div");

node.className = 'node';
document.body.appendChild(node);
