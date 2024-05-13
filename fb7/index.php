<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
}
</style>
</head>
<body onload="startGame()">
<script>

var myGamePiece;

function startGame() {
    myGameArea.start();
    myGamePiece = new component(60, 60, "red", 100, 100);
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 600;
        this.canvas.height = 300;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function (e) {
            myGameArea.keys = (myGameArea.keys || []);
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.keys[e.keyCode] = (e.type == "keydown");            
        })
    }, 
    clear : function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.gamearea = myGameArea;
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
    this.x += this.speedX;
    this.y += this.speedY;

    var gameWidth = myGameArea.canvas.width;
    var gameHeight = myGameArea.canvas.height;

    if (this.x <= 0) {
        this.x = 0;
    } else if (this.x >= gameWidth - this.width) {
        this.x = gameWidth - this.width;
    }

    if (this.y <= 0) {
        this.y = 0;
    } else if (this.y >= gameHeight - this.height) {
        this.y = gameHeight - this.height;
    }
}

}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.speedX = 0;
    myGamePiece.speedY = 0;    
    if (myGameArea.keys && myGameArea.keys[37]) {myGamePiece.speedX = -10; }
    if (myGameArea.keys && myGameArea.keys[39]) {myGamePiece.speedX = 10; }
    if (myGameArea.keys && myGameArea.keys[38]) {myGamePiece.speedY = -10; }
    if (myGameArea.keys && myGameArea.keys[40]) {myGamePiece.speedY = 10; }
    myGamePiece.newPos();    
    myGamePiece.update();
}
</script>
</body>
</html>