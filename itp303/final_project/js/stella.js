// get context and screen size
let ctx = cnv.getContext("2d");
let W = 0;
let H = 0;

function setUpCanvas() {
    W = window.innerWidth;
    H = window.innerHeight;
    // set the width and height of the canvas
    cnv.width = W;
    cnv.height = H;
    // set the canvas background color
    ctx.fillStyle = "#112";
    // fillRect(x, y, width, height) fills the canvas rectangle
    ctx.fillRect(0, 0, W, H);
}

function star() {
    // random position and size of stars
    let x = W * Math.random();
    let y = H * Math.random();
    let r = 2.5 * Math.random();
    // shadowBlur and shadowColor will add the glow-y effect to the stars once they're created
    ctx.shadowBlur = 10;
    ctx.shadowColor = "white";
    // draw the stars
    ctx.beginPath();
    ctx.fillStyle = "white";
    ctx.arc(x, y, r, 0, Math.PI * 2);
    ctx.fill();
}

let reload = false;
function page() {
    setUpCanvas();
    // generates stars a certain amount of times
    for (i = 0; i < 100; i++) {
        if (!reload) {
            // using setTimeout instead of window.requestAnimationFrame for slower speed
            setTimeout(() => star(), 100 * i);
        }
        else {
            break;
        }
    }
    i = 0;
    reload = false;
}

page();

window.onresize = function() {
    reload = true;
    // draw it all again
    page();
}