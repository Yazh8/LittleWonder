<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic-Tac-Toe</title>
    <link rel="stylesheet" type="text/css">
    <style>
        /* Add CSS styles for the game board */
        #board {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            gap: 5px;
            width: 500px;
            margin: 0 auto;
        }
        h1 {
    font-size: 36px;
    text-align: center;
        }

        .cell {
            width: 150px;
            height: 150px;
            font-size: 48px;
            text-align: center;
            vertical-align: middle;
            background-color: #f0f0f0;
            cursor: pointer;
        }

        .cell.X {
            background: url('banana.png') center/contain no-repeat;
        }

        .cell.O {
            background: url('choc.png') center/contain no-repeat;
        }

        /* Add styles for the game message */
        #message {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }

        #winner-popup {
    display: none; /* Should be initially set to none */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    align-items: center;
    justify-content: center;
}


        #winner-popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        /* Add styles for the scores */
        #scores {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
        }

        #playerX-score {
            color: blue;
            display: inline-block;
            margin-right: 20px;
        }

        #playerO-score {
            color: red;
            display: inline-block;
        }

        /* Set the background image */
        body {
            background-image: url("tic.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Tic-Tac-Toe</h1>
    <div id="scores">
        <div id="playerX-score">BANANA : 0</div>
        <div id="playerO-score">CHOCOLATE: 0</div>
    </div>
    <div id="message">CHOCOLATE's turn</div>
    <div id="board">
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
    </div>

    <div id="winner-popup">
        <div id="winner-popup-content">
            <h2>Winner</h2>
            <p id="winner-message"></p>
            <button id="play-again-button">Play Again</button>
        </div>
    </div>
    <script>
        const cells = document.querySelectorAll('.cell');
        const message = document.getElementById('message');
        const winnerPopup = document.getElementById('winner-popup');
        const winnerMessage = document.getElementById('winner-message');
        const playAgainButton = document.getElementById('play-again-button');
        const playerXScoreElement = document.getElementById('playerX-score');
        const playerOScoreElement = document.getElementById('playerO-score');

        let currentPlayer = 'X';
        let isGameActive = true;
        let playerXScore = 0;
        let playerOScore = 0;

        function updateScore() {
            playerXScoreElement.textContent = `Player X: ${playerXScore}`;
            playerOScoreElement.textContent = `Player O: ${playerOScore}`;
        }

        function checkWinner() {
            const winningCombinations = [
                [0, 1, 2],
                [3, 4, 5],
                [6, 7, 8],
                [0, 3, 6],
                [1, 4, 7],
                [2, 5, 8],
                [0, 4, 8],
                [2, 4, 6]
            ];

            for (const combination of winningCombinations) {
                const [a, b, c] = combination;
                if (cells[a].textContent && cells[a].textContent === cells[b].textContent && cells[a].textContent === cells[c].textContent) {
                    isGameActive = false;
                    cells[a].classList.add('winner');
                    cells[b].classList.add('winner');
                    cells[c].classList.add('winner');
                    const winningPlayer = currentPlayer === 'X' ? 'O' : 'X';
                    winnerMessage.textContent = `Player ${winningPlayer} wins!`;
                    winnerPopup.style.display = 'flex';

                    // Update the score
                    if (winningPlayer === 'X') {
                        playerXScore++;
                    } else {
                        playerOScore++;
                    }
                    updateScore();

                    return;
                }
            }

            if ([...cells].every(cell => cell.textContent)) {
                isGameActive = false;
                winnerMessage.textContent = "It's a draw!";
                winnerPopup.style.display = 'flex';
            }
        }

        function handlePlayAgainClick() {
    console.log('Play again clicked'); // Add this line for debugging
    cells.forEach(cell => {
        cell.textContent = '';
        cell.classList.remove('X', 'O', 'winner');
    });

    currentPlayer = 'X';
    isGameActive = true;
    message.innerText = `Player ${currentPlayer}'s turn`;
    winnerPopup.style.display = 'none';
}

        function handleCellClick(e) {
            if (!isGameActive || e.target.classList.contains('X') || e.target.classList.contains('O')) return;

            e.target.classList.add(currentPlayer);
            checkWinner();

            if (isGameActive) {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
                message.innerText = `Player ${currentPlayer}'s turn`;
            }
        }

        cells.forEach(cell => cell.addEventListener('click', handleCellClick));
        playAgainButton.addEventListener('click', handlePlayAgainClick);

        const canvas = document.getElementById("canvas");
        const ctx = canvas.getContext("2d");
        let radius = canvas.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        setInterval(drawClock, 1000);

        function drawClock() {
            drawFace(ctx, radius);
            drawNumbers(ctx, radius);
            drawTime(ctx, radius);
        }

        function drawFace(ctx, radius) {
            const grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
            grad.addColorStop(0, '#333');
            grad.addColorStop(0.5, 'white');
            grad.addColorStop(1, '#333');
            ctx.beginPath();
            ctx.arc(0, 0, radius, 0, 2*Math.PI);
            ctx.fillStyle = 'white';
            ctx.fill();
            ctx.strokeStyle = grad;
            ctx.lineWidth = radius*0.1;
            ctx.stroke();
            ctx.beginPath();
            ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
            ctx.fillStyle = '#333';
            ctx.fill();
        }

        function drawNumbers(ctx, radius) {
            ctx.font = radius*0.15 + "px arial";
            ctx.textBaseline="middle";
            ctx.textAlign="center";
            for(let num = 1; num < 13; num++){
                let ang = num * Math.PI / 6;
                ctx.rotate(ang);
                ctx.translate(0, -radius*0.85);
                ctx.rotate(-ang);
                ctx.fillText(num.toString(), 0, 0);
                ctx.rotate(ang);
                ctx.translate(0, radius*0.85);
                ctx.rotate(-ang);
            }
        }

        function drawTime(ctx, radius){
            const now = new Date();
            let hour = now.getHours();
            let minute = now.getMinutes();
            let second = now.getSeconds();
            //hour
            hour=hour%12;
            hour=(hour*Math.PI/6)+
            (minute*Math.PI/(6*60))+
            (second*Math.PI/(360*60));
            drawHand(ctx, hour, radius*0.5, radius*0.07);
            //minute
            minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
            drawHand(ctx, minute, radius*0.8, radius*0.07);
            // second
            second=(second*Math.PI/30);
            drawHand(ctx, second, radius*0.9, radius*0.02);
        }

        function drawHand(ctx, pos, length, width) {
            ctx.beginPath();
            ctx.lineWidth = width;
            ctx.lineCap = "round";
            ctx.moveTo(0,0);
            ctx.rotate(pos);
            ctx.lineTo(0, -length);
            ctx.stroke();
            ctx.rotate(-pos);
        }
    </script>
</body>
</html>
