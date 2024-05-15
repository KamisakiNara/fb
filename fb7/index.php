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
var obstacles = [];
var score = 0;
var highestScore = 0;
var isPaused = false;
var gameOver = false;
var interval;
var obstacleInterval;

function startGame() {
    myGameArea.start();
    myGamePiece = new component(50, 50, "red", 100, 100);
    generateObstacles();
}

function generateObstacles() {
    obstacleInterval = setInterval(function() {
        if (!isPaused) {
            var x = myGameArea.canvas.width;
            var y = Math.floor(Math.random() * (myGameArea.canvas.height - 30));
            obstacles.push(new component(30, 30, "green", x, y, true));
        }
    }, 2000); // Generate a new obstacle every 2 seconds
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 1500;
        this.canvas.height = 650;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function (e) {
            myGameArea.keys = (myGameArea.keys || []);
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
            if (e.keyCode == 32) { // Space key for pause/start
                togglePause();
            }
            if (e.keyCode == 82) { // 'R' key to restart the game
                if (gameOver) {
                    restartGame();
                }
            }
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
    }, 
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    },
    stop : function() {
        clearInterval(interval);
        clearInterval(obstacleInterval);
    }
}

function component(width, height, color, x, y, isObstacle = false) {
    this.gamearea = myGameArea;
    this.width = width;
    this.height = height;
    this.speedX = isObstacle ? -5 : 0; // Obstacle moves to the left
    this.speedY = 0;    
    this.x = x;
    this.y = y;
    this.isObstacle = isObstacle;
    this.passed = false;
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.beginPath();
        if (this.isObstacle) {
            ctx.arc(this.x, this.y, this.width / 2, 0, 2 * Math.PI);
        } else {
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
        ctx.fill();
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;

        if (this.isObstacle) {
            if (this.x < -this.width) {
                this.x = myGameArea.canvas.width;
                this.y = Math.floor(Math.random() * (myGameArea.canvas.height - this.height));
                this.passed = false;
            }
        } else {
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
    this.collisionWith = function(otherObj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherObj.x;
        var otherright = otherObj.x + (otherObj.width);
        var othertop = otherObj.y;
        var otherbottom = otherObj.y + (otherObj.height);
        var crash = true;
        if ((mybottom < othertop) ||
           (mytop > otherbottom) ||
           (myright < otherleft) ||
           (myleft > otherright)) {
           crash = false;
        }
        return crash;
    }
}

function updateGameArea() {
    myGameArea.clear();

    if (!isPaused) {
        myGamePiece.speedX = 0;
        myGamePiece.speedY = 0;    
        if (myGameArea.keys && myGameArea.keys[37]) { myGamePiece.speedX = -10; }
        if (myGameArea.keys && myGameArea.keys[39]) { myGamePiece.speedX = 10; }
        if (myGameArea.keys && myGameArea.keys[38]) { myGamePiece.speedY = -10; }
        if (myGameArea.keys && myGameArea.keys[40]) { myGamePiece.speedY = 10; }
        if (myGameArea.keys && myGameArea.keys[65]) { myGamePiece.speedX = -10; }
        if (myGameArea.keys && myGameArea.keys[68]) { myGamePiece.speedX = 10; }
        if (myGameArea.keys && myGameArea.keys[87]) { myGamePiece.speedY = -10; }
        if (myGameArea.keys && myGameArea.keys[83]) { myGamePiece.speedY = 10; }
        myGamePiece.newPos();
    }
    myGamePiece.update();

    for (var i = 0; i < obstacles.length; i++) {
        if (!isPaused) {
            obstacles[i].newPos();
        }
        obstacles[i].update();

        if (!isPaused && myGamePiece.collisionWith(obstacles[i])) {
            gameOver = true;
            myGameArea.stop();
            updateHighScore();
            displayGameOver();
            return;
        } else if (!obstacles[i].passed && myGamePiece.x > obstacles[i].x + obstacles[i].width) {
            score += 50;
            obstacles[i].passed = true;
        }
    }

    displayScore();

    // Draw paused overlay if the game is paused
    if (isPaused) {
        displayPaused();
    }
}


function displayScore() {
    ctx = myGameArea.context;
    ctx.font = "30px Arial";
    ctx.fillStyle = "black";
    ctx.fillText("Score: " + score, 20, 40);
    ctx.fillText("High Score: " + highestScore, 20, 80);
    if (!isPaused) {
        ctx.fillText("Running", 20, 120);
    } else if (isPaused) {
        ctx.fillText("Paused", 20, 120);
    }
}

function displayPaused() {
    ctx = myGameArea.context;
    ctx.font = "60px Arial";
    ctx.fillStyle = "black"; // Solid black text
    ctx.fillText("Paused", myGameArea.canvas.width / 2.3, myGameArea.canvas.height / 2.3);
    ctx.font = "30px Arial";
    ctx.fillText("Press space to start the game", myGameArea.canvas.width / 2.7, myGameArea.canvas.height / 2.7 + 100);
}

function updateHighScore() {
    if (score > highestScore) {
        highestScore = score;
    }
}

function displayGameOver() {
    ctx = myGameArea.context;
    ctx.font = "60px Arial";
    ctx.fillStyle = "black";
    ctx.fillText("Game Over", myGameArea.canvas.width / 2 - 150, myGameArea.canvas.height / 2);
    ctx.fillText("High Score: " + highestScore, myGameArea.canvas.width / 2 - 180, myGameArea.canvas.height / 2 + 60);
    ctx.fillText("Press 'R' to Restart", myGameArea.canvas.width / 2 - 200, myGameArea.canvas.height / 2 + 120);
}

function togglePause() {
    isPaused = !isPaused;
}

function restartGame() {
    gameOver = false;
    score = 0;
    obstacles = [];
    myGameArea.clear();
    myGameArea.start();
    myGamePiece = new component(50, 50, "red", 100, 100);
    generateObstacles();
}

</script>
</body>
</html>