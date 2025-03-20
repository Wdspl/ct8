<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcje sterujące w PHP</title>
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
        .input-box {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Instrukcje sterujące w PHP</h1>
    <div class="container">
        <form method="POST">
            <div class="input-box">
                <label for="number">Liczba całkowita:</label>
                <input id="number" name="number" type="number" required>
            </div>
            <div class="input-box">
                <label for="color">Wybierz kolor:</label>
                <select id="color" name="color">
                    <option value="czerwony">Czerwony</option>
                    <option value="zielony">Zielony</option>
                    <option value="niebieski">Niebieski</option>
                </select>
            </div>
            <div class="input-box">
                <label for="age">Wiek:</label>
                <input id="age" name="age" type="number" required>
            </div>
            <div class="input-box">
                <label for="array">Tablica (liczby oddzielone przecinkami):</label>
                <input id="array" name="array" type="text" required>
            </div>
            <button type="submit">Prześlij</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']);
            $color = $_POST['color'];
            $age = intval($_POST['age']);
            $array = array_map('intval', explode(',', $_POST['array']));

            // Instrukcja warunkowa (if)
            if ($number > 0) {
                echo "Liczba jest dodatnia.<br>";
            } elseif ($number < 0) {
                echo "Liczba jest ujemna.<br>";
            } else {
                echo "Liczba jest równa zero.<br>";
            }

            // Instrukcja switch
            switch ($color) {
                case "czerwony":
                    echo "Wybrałeś kolor czerwony.<br>";
                    break;
                case "zielony":
                    echo "Wybrałeś kolor zielony.<br>";
                    break;
                case "niebieski":
                    echo "Wybrałeś kolor niebieski.<br>";
                    break;
            }

            // Operator warunkowy (ternary)
            $result = ($age >= 18) ? "Dorosły" : "Nieletni";
            echo $result . "<br>";

            // Pętla FOR
            for ($i = 0; $i < 5; $i++) {
                echo "Liczba w pętli FOR: $i<br>";
            }

            // Pętla WHILE
            $count = 0;
            while ($count < 5) {
                echo "Liczba w pętli WHILE: $count<br>";
                $count++;
            }

            // Pętla DO..WHILE
            $count = 0;
            do {
                echo "Liczba w pętli DO..WHILE: $count<br>";
                $count++;
            } while ($count < 5);

            // Pętla FOREACH
            foreach ($array as $num) {
                echo "Liczba z tablicy: $num<br>";
            }
        }
        ?>
    </div>
</body>
</html>
