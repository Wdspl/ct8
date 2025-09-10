let randomNumber;
let attempts;

const guessInput = document.getElementById("guess");
const guessBtn = document.getElementById("guessBtn");
const resultText = document.getElementById("result");
const attemptsText = document.getElementById("attempts");
const resetBtn = document.getElementById("resetBtn");

function startGame() {
    randomNumber = Math.floor(Math.random() * 100) + 1;
    attempts = 5;
    resultText.textContent = "";
    attemptsText.textContent = `Pozostałe próby: ${attempts}`;
    guessInput.value = "";
    guessInput.disabled = false;
    guessBtn.disabled = false;
    resetBtn.classList.add("hidden");
}

function makeGuess() {
    const userGuess = Number(guessInput.value);

    if (!userGuess || userGuess < 1 || userGuess > 100) {
        resultText.textContent = "Podaj liczbę od 1 do 100!";
        return;
    }

    if (attempts > 0) {
        if (userGuess === randomNumber) {
            resultText.textContent = "🎉 Gratulacje! Odgadłeś liczbę!";
            endGame();
        } else {
            attempts--;
            if (userGuess < randomNumber) {
                resultText.textContent = "📉 Za mało! Spróbuj ponownie.";
            } else {
                resultText.textContent = "📈 Za dużo! Spróbuj ponownie.";
            }
            attemptsText.textContent = `Pozostałe próby: ${attempts}`;

            if (attempts === 0) {
                resultText.textContent = `❌ Koniec gry! Liczba to ${randomNumber}.`;
                endGame();
            }
        }
    }
}

function endGame() {
    guessInput.disabled = true;
    guessBtn.disabled = true;
    resetBtn.classList.remove("hidden");
}

guessBtn.addEventListener("click", makeGuess);
resetBtn.addEventListener("click", startGame);

startGame();
