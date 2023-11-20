<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method</title>
</head>
<body>
    <h1>GET method</h1>
    <form method="get" action="get_method.php">
        <label for="num1">Enter Number 1: </label>
        <input type="text" name="num1" id="num1" required />
        <br/><br/>
        <label for="num2">Enter Number 2:</label>
        <input type="text" name="num2" id="num2" required />
        <br/><br/>
        <input type="submit" value="Calculate" />
        <br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
        $num1 = is_numeric($num1) ? $num1 : 0;
        $num2 = is_numeric($num2) ? $num2 : 0;

        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;

        echo "<h2>Results:</h2>";
        echo "<p>Number 1: $num1</p>";
        echo "<p>Number 2: $num2</p>";
        echo "<p>Sum: $sum</p>";
        echo "<p>Difference: $difference</p>";
        echo "<p>Product: $product</p>";
    }       
    ?>
</body>
</html>