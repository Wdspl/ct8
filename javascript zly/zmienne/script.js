// --- Konwersja za pomocą const ---
const str1 = "100";
const num1 = Number(str1);
const resultConst = "const: " + num1 + "\n" +
                    `(template literal): ${num1}\n`;

// --- Konwersja za pomocą let ---
let str2 = "42.5";
let num2 = Number(str2);
let resultLet = "let: " + num2 + "\n" +
                `(template literal): ${num2}\n`;

// --- Konwersja za pomocą var ---
var str3 = "abc"; // niepoprawna liczba
var num3 = Number(str3); // wynik to NaN
var resultVar = "var: " + num3 + "\n" +
                `(template literal): ${num3}\n`;

// --- Prompt dla użytkownika z walidacją dla y ---
let yInput;
let yNumber;
do {
  yInput = prompt("Wpisz liczbę y (tylko liczba!):");
  yNumber = Number(yInput);
  if (yInput === null) {
    break;
  }
  if (isNaN(yNumber)) {
    alert("To nie jest poprawna liczba. Spróbuj jeszcze raz.");
  }
} while (isNaN(yNumber));

// --- Prompt dla użytkownika z walidacją dla x ---
let xInput;
let xNumber;
if (yInput !== null) {
  do {
    xInput = prompt("Wpisz liczbę x (tylko liczba!):");
    xNumber = Number(xInput);
    if (xInput === null) {
      break;
    }
    if (isNaN(xNumber)) {
      alert("To nie jest poprawna liczba. Spróbuj jeszcze raz.");
    }
  } while (isNaN(xNumber));
}

let resultYUser, resultXUser, resultSum;

if (yInput === null) {
  resultYUser = "Użytkownik anulował wpisywanie y.\n";
  resultXUser = "";
  resultSum = "";
} else {
  resultYUser = "y (prompt input): " + yNumber + "\n" +
                `(template literal): ${yNumber}\n`;
  if (xInput === null) {
    resultXUser = "Użytkownik anulował wpisywanie x.\n";
    resultSum = "";
  } else {
    resultXUser = "x (prompt input): " + xNumber + "\n" +
                  `(template literal): ${xNumber}\n`;
    // Dodawanie y + x
    const sum = yNumber + xNumber;
    resultSum = "Suma y + x = " + sum + "\n" +
                `(template literal): ${sum}\n`;
  }
}

// --- Wyświetlenie wyników w przeglądarce ---
const outputDiv = document.getElementById("output");
outputDiv.textContent = 
  resultConst + "\n" + 
  resultLet + "\n" + 
  resultVar + "\n\n" + 
  resultYUser + 
  resultXUser + 
  resultSum;
