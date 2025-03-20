<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przewodnik po Operatorach w PHP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        h1 {
            font-size: 36px;
            color: #2c3e50;
            text-align: center;
            padding: 20px 0;
            background-color: #ecf0f1;
            margin-bottom: 20px;
            border-bottom: 4px solid #3498db;
        }

        h2 {
            font-size: 24px;
            color: #2980b9;
            margin-top: 30px;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 5px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            max-width: 800px;
            margin: 10px auto;
            color: #555;
        }

        pre {
            background-color: #34495e;
            color: white;
            padding: 15px;
            border-radius: 8px;
            border: none;
            overflow-x: auto;
            max-width: 100%;
            margin-top: 10px;
        }

        code {
            font-family: 'Courier New', Courier, monospace;
            color: #e74c3c;
            word-wrap: break-word;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            background-color: #ecf0f1;
            border-top: 2px solid #bdc3c7;
        }

        .output {
            font-size: 18px;
            margin-top: 10px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }

        .input-box {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        input[type="number"], button {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Przewodnik po Operatorach w PHP</h1>

        <h2>1. Operatory arytmetyczne</h2>
        <p>Wprowadź dwie liczby, aby wykonać operacje arytmetyczne:</p>
        <div class="input-box">
            <input id="a" type="number" value="12" />
            <input id="b" type="number" value="3" />
            <button onclick="performArithmetic()">Oblicz</button>
        </div>
        <div id="arithmeticResult" class="output"></div>

        <h2>2. Operatory porównania</h2>
        <p>Sprawdź porównania między dwiema liczbami:</p>
        <div id="comparisonResult" class="output"></div>

        <h2>3. Operatory logiczne</h2>
        <p>Spróbuj logicznych operacji między dwiema liczbami:</p>
        <div id="logicalResult" class="output"></div>

        <h2>4. Operatory przypisania</h2>
        <p>Wprowadź liczbę i operacje przypisania:</p>
        <div class="input-box">
            <input id="x" type="number" value="4" />
            <button onclick="performAssignment()">Wykonaj operację</button>
        </div>
        <div id="assignmentResult" class="output"></div>

        <h2>5. Operatory inkrementacji i dekrementacji</h2>
        <p>Przetestuj operatory inkrementacji i dekrementacji:</p>
        <div id="incrementDecrementResult" class="output"></div>

        <h2>6. Operator rzutowania (konwersji typu)</h2>
        <p>Wprowadź liczbę zmiennoprzecinkową i sprawdź jej konwersję:</p>
        <div class="input-box">
            <input id="floatValue" type="number" step="0.01" value="7.89" />
            <button onclick="performCasting()">Rzuć</button>
        </div>
        <div id="castingResult" class="output"></div>
    </div>

    <footer>
       
    </footer>

    <script>
        function performArithmetic() {
            let a = parseFloat(document.getElementById('a').value);
            let b = parseFloat(document.getElementById('b').value);
            let result = `
                Suma: ${a + b} <br>
                Różnica: ${a - b} <br>
                Iloczyn: ${a * b} <br>
                Iloraz: ${a / b} <br>
                Reszta: ${a % b} <br>
                Potęga: ${a ** b}
            `;
            document.getElementById('arithmeticResult').innerHTML = result;
        }

        function performAssignment() {
            let x = parseInt(document.getElementById('x').value);
            let result = `
                x += 3: ${x + 3} <br>
                x -= 1: ${x - 1} <br>
                x *= 2: ${x * 2} <br>
                x /= 4: ${x / 4} <br>
                x %= 2: ${x % 2} <br>
                x .= " PHP": ${x + " PHP"}
            `;
            document.getElementById('assignmentResult').innerHTML = result;
        }

        function performCasting() {
            let floatValue = parseFloat(document.getElementById('floatValue').value);
            let result = `
                Rzutowanie na int: ${parseInt(floatValue)} <br>
                Rzutowanie na bool: ${Boolean(floatValue)}
            `;
            document.getElementById('castingResult').innerHTML = result;
        }

        function performComparison() {
            let a = parseFloat(document.getElementById('a').value);
            let b = parseFloat(document.getElementById('b').value);
            let result = `
                a == b: ${a == b} <br>
                a === b: ${a === b} <br>
                a != b: ${a != b} <br>
                a !== b: ${a !== b} <br>
                a > b: ${a > b} <br>
                a < b: ${a < b} <br>
                a >= b: ${a >= b} <br>
                a <= b: ${a <= b}
            `;
            document.getElementById('comparisonResult').innerHTML = result;
        }

        function performLogical() {
            let a = parseFloat(document.getElementById('a').value);
            let b = parseFloat(document.getElementById('b').value);
            let result = `
                a > 5 && b < 10: ${a > 5 && b < 10} <br>
                a > 5 || b < 10: ${a > 5 || b < 10} <br>
                !(a > 5): ${!(a > 5)}
            `;
            document.getElementById('logicalResult').innerHTML = result;
        }
    </script>
</body>
</html>
