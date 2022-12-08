//Saving the canvas element created, and creating a context variable to manipulate the canvas.
const canvas = document.getElementById("canvas");
let context = canvas.getContext("2d");

//Setting canvas dimensions.
canvas.width = 1800;
canvas.height = 800;

//Setting canvas background as color white.
context.fillStyle = "white";
context.fillRect(0, 0, canvas.width, canvas.height);

//Creating needed variables, to change them accordingly when needed.
let brush_color = "black";  //Initial color of brush.
let brush_size = "2";       //initial size of brush.
let isPainting = false;     //initially Not painting.

//Attaching event's handleres accoridingly with events.
//addEventListener will activate based on the first parameter condition, calling the second parameter condition.
//Adding Event Listeners for start funciton.
canvas.addEventListener("touchstart", start);
canvas.addEventListener("mousedown", start);

//Adding Event Listeners for draw funciton.
canvas.addEventListener("touchmove", draw);
canvas.addEventListener("mousemove", draw);

//Adding Event Listeners for stop funciton.
canvas.addEventListener("touchend", stop);
canvas.addEventListener("mouseup", stop);
canvas.addEventListener("mouseout", stop);

//Adding Event Listeners for clear funciton.
var button = document.getElementById("clear");
button.addEventListener("click", clear);

//Setting the brush's shape as round.
context.lineCap = "round";
context.lineJoin = "round";

//start function, which initiates the drawing onMouseDown or onTouchStart (based on the input device type).
function start(event) {

    //Calculating the cursor's position. We do this instead of using event.clientX/Y only because when scrolling the page, it changes needed values.
    var rect = canvas.getBoundingClientRect();
    var mouseX = event.clientX - rect.left;
    var mouseY = event.clientY - rect.top;

    //Initiating the drawing path.
    isPainting = true;
    context.beginPath();
    context.moveTo(mouseX, mouseY);

    //Canceling (restarting) the event caller.
    event.preventDefault();
}

//draw function, which continues the draw, based on events onTouchMove or onMouseMove (based on the input device type).
function draw(event) {

    //Cancelling call if not painting.
    if ( !isPainting ) {
        return;
    }

    //Calculating the cursor's position. We do this instead of using event.clientX/Y only because when scrolling the page, it changes needed values.
    var rect = canvas.getBoundingClientRect();
    var mouseX = event.clientX - rect.left;
    var mouseY = event.clientY - rect.top;

    //Setting required settings, and changing them as needed onInput. 
    context.strokeStyle = brush_color;
    context.lineWidth = brush_size;
    
    //Continueing the draw initiated path.
    context.lineTo(mouseX, mouseY);
    context.stroke();
}

//stop function, which ends and terminates the drawing by closing the path. Works onTouchEnd or onMouseUp or onMouseOut (based on the input device type).
function stop(event) {

    //Cancelling call if not painting.
    if ( !isPainting ) {
        return;
    }               

    //Closing the path to stop drawing, and setting isPainting to false.
    context.stroke();
    context.closePath();
    isPainting = false;

    //Canceling (restarting) the event caller.
    event.preventDefault();
}

//clear function, which clears the canvas, by calling the clearRect.
function clear() {
    context.clearRect(0, 0, canvas.width, canvas.height);
}