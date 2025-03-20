const target = document.getElementById('target');
const scoreDisplay = document.getElementById('score');
let score = 0;
let gameInterval;

function startGame() {
    gameInterval = setInterval(moveTarget, 1000);
}

function moveTarget() {
    const x = Math.random() * (560 - 40); // 560 = szerokość - średnica celu
    const y = Math.random() * (360 - 40); // 360 = wysokość - średnica celu
    target.style.left = `${x}px`;
    target.style.top = `${y}px`;
    target.style.display = 'block';
}

target.addEventListener('click', () => {
    score++;
    scoreDisplay.textContent = `Wynik: ${score}`;
    target.style.display = 'none';
});

startGame();
