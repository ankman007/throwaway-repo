<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
        label{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <form action="04Calculator.php" method="post">
        <label for="num-1">Enter the first number: </label>
        <input type="text" name="num-1"><br>

        <label for="num-1">Enter the second number: </label>
        <input type="text" name="num-2"><br>

        <label for="operation">Select the operation you want to perform: </label>
        <select name="operator" id="operator" required>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
        </select><br>

        <input type="submit" value="Perform The Operation" style="margin-top: 10px;"><br>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            // $num1 = isset($_POST["num-1"]) ? $_POST["num1"] : null;
            // $num2 = isset($_POST["num-2"]) ? $_POST["num2"] : null;
            // $operator = isset($_POST["operator"]) ? $_POST["operator"] : null;

            $num1 = $_POST["num-1"];
            $num2 = $_POST["num-2"];
            $operator = $_POST["operator"];


            switch($operator){
                case 'add':
                    $res = $num1 + $num2;
                    echo "Result: {$num1} + {$num2} = {$res}";
                    break;
                case 'sub':
                    $res = $num1 - $num2;
                    echo "Result: {$num1} - {$num2} = {$res}";
                    break;
                case 'mul':
                    $res = $num1 + $num2;
                    echo "Result: {$num1} * {$num2} = {$res}";
                    break;
                case 'div':
                    $res = $num1 + $num2;
                    echo "Result: {$num1} / {$num2} = {$res}";
                    break;
            }
        }

    ?>
</body>
</html>