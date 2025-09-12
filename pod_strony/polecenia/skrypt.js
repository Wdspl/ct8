// script.js

// Funkcje do wyświetlania tekstu
function displayWithWrite() {
    document.write("Hello, world! Z użyciem document.write");
}

function displayWithLog() {
    console.log("Hello, world! Z użyciem console.log");
}

function displayWithInnerHTML() {
    document.getElementById('result').innerHTML = "Hello, world! Z użyciem window.innerHTML";
}

function displayWithInnerText() {
    document.getElementById('result').innerText = "Hello, world! Z użyciem innerText";
}

// Obsługa przycisków
document.getElementById('btnWrite').addEventListener('click', displayWithWrite);
document.getElementById('btnLog').addEventListener('click', displayWithLog);
document.getElementById('btnInnerHTML').addEventListener('click', displayWithInnerHTML);
document.getElementById('btnInnerText').addEventListener('click', displayWithInnerText);
