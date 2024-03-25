<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description" content="Canvas html"/>
<title>Canvas HTML</title>
</head>
<body>
    <canvas id="myCanvas" width="500" height="500" style="border: 1px solid black;"></canvas>

    
<script>
    //Objek canvas ditengah
    // const canvas = document.getElementById("myCanvas");
    // const ctx = canvas.getContext("2d");
    // ctx.fillStyle = "#0000ff";
    // ctx.fillRect(70, 20, 60, 60);
    // ctx.moveTo(30, 10);
    // ctx.lineTo(170, 10);
    // ctx.lineWidth = 5;
    // ctx.strokeStyle = "skyblue";
    // ctx.lineCap = "round";
    // ctx.stroke();

    //garis kedua
    // ctx.moveTo(30, 90);
    // ctx.lineTo(170, 90);
    // ctx.lineWidth = 5;
    // ctx.strokeStyle = "";
    // ctx.lineCap = "round";
    // ctx.stroke();

    //membuat garis
    // const canvas = document.getElementById("myCanvas");
    // const ctx = canvas.getContext("2d");
    // ctx.moveTo(0, 0);
    // ctx.lineTo(200, 100);
    // ctx.stroke();

    //lingkaran
    // const canvas = document.getElementById("myCanvas");
    // const ctx = canvas.getContext("2d");
    // ctx.beginPath();
    // ctx.arc(100, 50, 40, 0, 2 * Math.PI);
    // ctx.strokeStyle = "#00ff00";
    // ctx.lineWidth = 2;
    // ctx.stroke();

    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.moveTo(50,160);
    ctx.lineTo(450,160);
    ctx.lineTo(60,400);
    ctx.moveTo(50,160);
    ctx.lineTo(350,400);
    ctx.lineTo(260,25);
    ctx.lineTo(60,400);
    ctx.stroke();

</script>

</body>
</html>