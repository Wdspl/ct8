const target = document.getElementById('target');
const scoreDisplay = document.getElementById('score');
const resetBtn = document.getElementById('resetBtn');

let score = 0;
let gameInterval;

function startGame() {
    score = 0;
    scoreDisplay.textContent = `Wynik: ${score}`;
    clearInterval(gameInterval);
    gameInterval = setInterval(moveTarget, 1000);
    target.style.display = 'block';
}

function moveTarget() {
    const gameArea = document.getElementById('gameArea');
    const areaWidth = gameArea.clientWidth;
    const areaHeight = gameArea.clientHeight;

    const x = Math.random() * (areaWidth - 40);
    const y = Math.random() * (areaHeight - 40);

    target.style.left = `${x}px`;
    target.style.top = `${y}px`;
    target.style.display = 'block';
}

target.addEventListener('click', () => {
    score++;
    scoreDisplay.textContent = `Wynik: ${score}`;
    target.style.display = 'none';
});

resetBtn.addEventListener('click', startGame);

startGame();
