<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            width: 320px;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        legend {
            font-size: 1.4em;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1.1em;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .buttons input[type="submit"] {
            padding: 12px;
            font-size: 1.1em;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            background: #3498db;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .buttons input[type="submit"]:hover {
            background: #2980b9;
        }

        .result {
            margin-top: 20px;
            padding: 12px;
            background: #f0f8ff;
            border: 2px solid #dceefc;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
            color: #2c3e50;
        }

        .error {
            color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="calculator">
    <form action="#" method="post">
        <fieldset>
            <legend>Basic Calculator</legend>

            <label for="num1">First Number</label>
            <input type="text" name="num1" id="num1">

            <label for="num2">Second Number</label>
            <input type="text" name="num2" id="num2">

            <div class="buttons">
                <input type="submit" name="add" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="prod" value="×">
                <input type="submit" name="div" value="÷">
            </div>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            if (isset($_POST['add'])) {
                $result = $num1 + $num2;
            }
            if (isset($_POST['sub'])) {
                $result = $num1 - $num2;
            }
            if (isset($_POST['prod'])) {
                $result = $num1 * $num2;
            }
            if (isset($_POST['div'])) {
                if ($num2 == 0) {
                    $error = "Error: Division by zero!";
                } else {
                    $result = $num1 / $num2;
                }
            }
        } else {
            $error = "Please enter valid numbers.";
        }

        if (isset($result)) {
            echo "<div class='result'>Result: $result</div>";
        } elseif (isset($error)) {
            echo "<div class='result error'>$error</div>";
        }
    }
    ?>
</div>

</body>
</html>
