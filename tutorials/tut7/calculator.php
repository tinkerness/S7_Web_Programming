<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post">
        Enter the first number: <input type="text" name="num1" /><br/><br/>
        Enter the second number: <input type="text" name="num2" /><br/><br/>
        Select an operation:
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br/><br/>
        <input type="submit" value="Calculate" /><br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "Cannot divide by zero.";
                } else {
                    $result = $num1 / $num2;
                    echo "Result: $num1 / $num2 = $result";
                }
                break;
            default:
                echo "Invalid operation selected.";
        }
    }
    ?>

</body>
</html>