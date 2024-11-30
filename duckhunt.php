<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Duck Hunt Game</title>
  <style>
    canvas {
      border: 2px solid black;
      display: block;
      margin: 0 auto;
      background-image: url(877159_juliano14_building-background-game-demo.jpg); /* You can use your own background image */
      background-size: cover;
    }
  </style>
</head>
<body>
  <canvas id="gameCanvas" width="800" height="400"></canvas>

  <script>
    const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");

    const duckWidth = 50;
    const duckHeight = 50;
    const gunWidth = 40;
    const gunHeight = 20;

    let score = 0;

    let ducks = [];

    const duckSpeed = 1; // Reduced speed

    function randomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function createDuck() {
      const duckX = canvas.width;
      const duckY = randomInt(50, canvas.height - duckHeight);
      ducks.push({ x: duckX, y: duckY });
    }

    function drawDuck(x, y) {
      const img = new Image();
      img.src = "duck.jpeg"; // You need to have a duck image
      ctx.drawImage(img, x, y, duckWidth, duckHeight);
    }

    function drawGun(x, y) {
      ctx.fillStyle = "#000";
      ctx.fillRect(x, y, gunWidth, gunHeight);
    }

    function updateGameArea() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      for (let i = 0; i < ducks.length; i++) {
        ducks[i].x -= duckSpeed;
        drawDuck(ducks[i].x, ducks[i].y);

        // Check if duck is out of canvas
        if (ducks[i].x + duckWidth < 0) {
          ducks.splice(i, 1);
        }
      }

      drawGun(20, canvas.height / 2);

      requestAnimationFrame(updateGameArea);
    }

    canvas.addEventListener("click", (event) => {
      const mouseX = event.clientX - canvas.getBoundingClientRect().left;
      const mouseY = event.clientY - canvas.getBoundingClientRect().top;

      for (let i = ducks.length - 1; i >= 0; i--) {
        if (
          mouseX >= ducks[i].x &&
          mouseX <= ducks[i].x + duckWidth &&
          mouseY >= ducks[i].y &&
          mouseY <= ducks[i].y + duckHeight
        ) {
          ducks.splice(i, 1);
          score++;
          break; // Only one duck can be shot in one click
        }
      }
    });

    createDuck();
    setInterval(createDuck, 2000); // Create a new duck every 2 seconds

    updateGameArea();
  </script>
</body>
</html>
