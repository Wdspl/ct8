<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodzaje zmiennych w PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .input-box {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="number"], button, select {
            padding: 8px 12px;
            font-size: 16px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        .output {
            margin-top: 15px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Rodzaje zmiennych w PHP</h1>
    <div class="container">
        <div class="input-box">
            <label for="intVar">Integer (int):</label>
            <input id="intVar" type="number" value="10" oninput="updateVariables()" />
        </div>
        <div class="input-box">
            <label for="floatVar">Float (float):</label>
            <input id="floatVar" type="number" value="10.5" step="0.1" oninput="updateVariables()" />
        </div>
        <div class="input-box">
            <label for="stringVar">String:</label>
            <input id="stringVar" type="text" value="Hello, PHP!" oninput="updateVariables()" />
        </div>
        <div class="input-box">
            <label for="boolVar">Boolean (true/false):</label>
            <select id="boolVar" oninput="updateVariables()">
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
        </div>
        <div class="input-box">
            <label for="arrayVar">Array (np. liczby oddzielone przecinkiem):</label>
            <input id="arrayVar" type="text" value="1,2,3,4" oninput="updateVariables()" />
        </div>
        <div class="input-box">
            <label for="operation">Wybierz operację:</label>
            <select id="operation" onchange="performOperation()">
                <option value="add">Dodaj (Integer + Float)</option>
                <option value="sumArray">Suma elementów tablicy</option>
                <option value="concatString">Połącz String z Integer</option>
                <option value="logicAnd">AND logiczny</option>
            </select>
        </div>
        <div id="variableResults" class="output"></div>
    </div>

    <script>
        let intVar, floatVar, stringVar, boolVar, arrayVar;

        // Funkcja aktualizująca zmienne
        function updateVariables() {
            // Pobieranie wartości z formularzy
            intVar = parseInt(document.getElementById('intVar').value);
            floatVar = parseFloat(document.getElementById('floatVar').value);
            stringVar = document.getElementById('stringVar').value;
            boolVar = document.getElementById('boolVar').value === "true";
            arrayVar = document.getElementById('arrayVar').value.split(',')
                .map(val => val.trim() ? parseInt(val.trim()) : 0);  // Obsługuje puste wartości

            // Od razu pokazujemy aktualny stan zmiennych
            showVariables();
        }

        // Funkcja do wyświetlania aktualnych zmiennych
        function showVariables() {
            let result = `
                <h3>Wyniki:</h3>
                <p><strong>Integer (int):</strong> ${intVar} (Typ: ${typeof intVar})</p>
                <p><strong>Float (float):</strong> ${floatVar} (Typ: ${typeof floatVar})</p>
                <p><strong>String:</strong> "${stringVar}" (Typ: ${typeof stringVar})</p>
                <p><strong>Boolean:</strong> ${boolVar} (Typ: ${typeof boolVar})</p>
                <p><strong>Array:</strong> [${arrayVar.join(', ')}] (Typ: ${typeof arrayVar})</p>
            `;
            document.getElementById('variableResults').innerHTML = result;
        }

        // Funkcja do wykonania operacji na zmiennych
        function performOperation() {
            const operation = document.getElementById('operation').value;
            let result;

            switch (operation) {
                case 'add':
                    result = intVar + floatVar;
                    document.getElementById('variableResults').innerHTML += `
                        <p><strong>Wynik dodawania Integer i Float:</strong> ${result} (Typ: ${typeof result})</p>
                    `;
                    break;
                case 'sumArray':
                    let sum = arrayVar.reduce((acc, num) => acc + num, 0);
                    document.getElementById('variableResults').innerHTML += `
                        <p><strong>Suma elementów w tablicy:</strong> ${sum} (Typ: ${typeof sum})</p>
                    `;
                    break;
                case 'concatString':
                    result = stringVar + intVar;
                    document.getElementById('variableResults').innerHTML += `
                        <p><strong>Połączony String i Integer:</strong> ${result} (Typ: ${typeof result})</p>
                    `;
                    break;
                case 'logicAnd':
                    result = boolVar && (intVar > 5);
                    document.getElementById('variableResults').innerHTML += `
                        <p><strong>Wynik logicznego AND:</strong> ${result} (Typ: ${typeof result})</p>
                    `;
                    break;
            }
        }

        // Inicjalizacja po załadowaniu strony
        updateVariables();
    </script>
</body>
</html>
