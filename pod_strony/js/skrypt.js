 // Funkcja konwertująca na liczbę całkowitą
 function convertToInt() {
    const value = document.getElementById('inputValue').value.trim();
    const outputDiv = document.getElementById('output');
    
    if (value === "") {
        outputDiv.innerHTML = `<div class="result error">Proszę wprowadzić wartość!</div>`;
        return;
    }

    const result = parseInt(value);
    const resultText = Number.isNaN(result) ? `Błąd: "${value}" nie jest liczbą całkowitą!` : result;

    outputDiv.innerHTML = `
        <div class="result ${Number.isNaN(result) ? 'error' : 'success'}">
            <strong>Konwersja na liczbę całkowitą dla: "${value}"</strong><br>
            ${resultText}
        </div>
    `;
}

// Funkcja konwertująca na liczbę zmiennoprzecinkową
function convertToFloat() {
    const value = document.getElementById('inputValue').value.trim();
    const outputDiv = document.getElementById('output');
    
    if (value === "") {
        outputDiv.innerHTML = `<div class="result error">Proszę wprowadzić wartość!</div>`;
        return;
    }

    const formattedValue = value.replace(',', '.');
    const result = parseFloat(formattedValue);
    const resultText = Number.isNaN(result) ? `Błąd: "${value}" nie jest liczbą zmiennoprzecinkową!` : result;

    outputDiv.innerHTML = `
        <div class="result ${Number.isNaN(result) ? 'error' : 'success'}">
            <strong>Konwersja na liczbę zmiennoprzecinkową dla: "${value}"</strong><br>
            ${resultText}
        </div>
    `;
}

// Funkcja konwertująca na liczbę ogólną
function convertToNumber() {
    const value = document.getElementById('inputValue').value.trim();
    const outputDiv = document.getElementById('output');
    
    if (value === "") {
        outputDiv.innerHTML = `<div class="result error">Proszę wprowadzić wartość!</div>`;
        return;
    }

    const formattedValue = value.replace(',', '.');
    const result = Number(formattedValue);
    const resultText = Number.isNaN(result) ? `Błąd: "${value}" nie jest liczbą!` : result;

    outputDiv.innerHTML = `
        <div class="result ${Number.isNaN(result) ? 'error' : 'success'}">
            <strong>Konwersja na liczbę ogólną dla: "${value}"</strong><br>
            ${resultText}
        </div>
    `;
}

// Funkcja sprawdzająca, czy wartość to NaN
function isNotANumber() {
    const value = document.getElementById('inputValue').value.trim();
    const outputDiv = document.getElementById('output');
    
    if (value === "") {
        outputDiv.innerHTML = `<div class="result error">Proszę wprowadzić wartość!</div>`;
        return;
    }

    const resultText = isNaN(value) ? `Tak, "${value}" jest NaN` : `Nie, "${value}" to liczba`;

    outputDiv.innerHTML = `
        <div class="result ${isNaN(value) ? 'error' : 'success'}">
            <strong>Sprawdzenie, czy to NaN dla: "${value}"</strong><br>
            ${resultText}
        </div>
    `;
}

// Funkcja testująca argumenty
function testArguments() {
    const argsInput = document.getElementById('argsInput').value.trim();
    const outputDiv = document.getElementById('output');
    
    if (argsInput === "") {
        outputDiv.innerHTML = `<div class="result error">Proszę wprowadzić argumenty!</div>`;
        return;
    }

    // Podziel argumenty na tablicę
    const args = argsInput.split(',').map(arg => arg.trim());

    // Jeśli brakuje jakichkolwiek argumentów
    if (args.length === 0) {
        outputDiv.innerHTML = `<div class="result error">Brak argumentów do testowania!</div>`;
        return;
    }

    // Wypisz argumenty
    outputDiv.innerHTML = `
        <div class="result success">
            <strong>Testowanie argumentów: "${argsInput}"</strong><br>
            Przekazane argumenty: ${args.join(', ')}
        </div>
    `;
}