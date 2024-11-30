<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background: #f0f0f0;
      background-image: url(brick.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      overflow: hidden;
      font-family: Arial, sans-serif;
    }

    canvas {
      display: block;
      background: #f0f0f0;
      background-image: url(877159_juliano14_building-background-game-demo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0 auto;
      border: 2px solid #33333390;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 400px; /* Set the desired width */
      height: 800px; /* Set the desired height */
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }
    

    .game-over-text {
      font-size: 36px;
      color: #e74c3c;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: none;
      text-align: center;
    }

    canvas:hover {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <canvas id="myCanvas" width="800" height="600"></canvas>
  <div class="game-over-text">Game Over. Click to play again!</div>
  <script>
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    context.font = 'bold 30px sans-serif';
    let scrollCounter, cameraY, current, mode, xSpeed;
    let ySpeed = 4;
    let height = 50;
    let boxes = [];
    boxes[0] = {
      x: 300,
      y: 300,
      width: 200,
      colors: ['#3498db', '#e74c3c'] // Two colors for the two sides
    };
    let debris = {
      x: 0,
      width: 0
    };

    function newBox() {
      let lastBox = boxes[current - 1];
      let newColors = lastBox.colors.slice().reverse(); // Reverse the colors
      boxes[current] = {
        x: 0,
        y: (current + 10) * height,
        width: lastBox.width,
        colors: newColors
      };
    }

    function gameOver() {
      mode = 'gameOver';
      context.fillText('Game over. Click to play again!', canvas.width / 2, canvas.height / 2);
      document.querySelector(".game-over-text").style.display = "block";
    }

    function animate() {
      if (mode != 'gameOver') {
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.fillText('Score: ' + (current - 1).toString(), 100, 50);
        for (let n = 0; n < boxes.length; n++) {
          let box = boxes[n];
          let gradient = context.createLinearGradient(box.x, 0, box.x + box.width, 0);
          gradient.addColorStop(0, box.colors[0]);
          gradient.addColorStop(1, box.colors[1]);
          context.fillStyle = gradient;
          context.fillRect(box.x, 600 - box.y + cameraY, box.width, height);
        }
        context.fillStyle = 'red';
        context.fillRect(debris.x, 600 - debris.y + cameraY, debris.width, height);
        if (mode == 'bounce') {
          boxes[current].x = boxes[current].x + xSpeed;
          if (xSpeed > 0 && boxes[current].x + boxes[current].width > canvas.width)
            xSpeed = -xSpeed;
          if (xSpeed < 0 && boxes[current].x < 0)
            xSpeed = -xSpeed;
        }
        if (mode == 'fall') {
          boxes[current].y = boxes[current].y - ySpeed;
          if (boxes[current].y == boxes[current - 1].y + height) {
            mode = 'bounce';
            let difference = boxes[current].x - boxes[current - 1].x;
            if (Math.abs(difference) >= boxes[current].width) {
              gameOver();
            }
            debris = {
              y: boxes[current].y,
              width: difference
            };
            if (boxes[current].x > boxes[current - 1].x) {
              boxes[current].width = boxes[current].width - difference;
              debris.x = boxes[current].x + boxes[current].width;
            } else {
              debris.x = boxes[current].x - difference;
              boxes[current].width = boxes[current].width + difference;
              boxes[current].x = boxes[current - 1].x;
            }
            if (xSpeed > 0)
              xSpeed++;
            else
              xSpeed--;
            current++;
            scrollCounter = height;
            newBox();
          }
        }
        debris.y = debris.y - ySpeed;
        if (scrollCounter) {
          cameraY++;
          scrollCounter--;
        }
      }
      window.requestAnimationFrame(animate);
    }

    function restart() {
      boxes.splice(1, boxes.length - 1);
      mode = 'bounce';
      cameraY = 0;
      scrollCounter = 0;
      xSpeed = 2;
      current = 1;
      newBox();
      debris.y = 0;
      document.querySelector(".game-over-text").style.display = "none";
    }

    canvas.onpointerdown = function() {
      if (mode == 'gameOver')
        restart();
      else {
        if (mode == 'bounce')
          mode = 'fall';
      }
    };

    restart();
    animate();
  </script>
</body>
</html>
