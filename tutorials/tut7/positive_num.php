<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Number</title>
</head>
<body>
    <h1>Positive Number</h1>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required />
        <input type="submit" value="Submit" />
        <br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_FLOAT);
        if ($number !== false && $number > 0) {
            echo "You entered a positive number: $number";
        } else {
            echo "Invalid input. Please enter a positive number.";
        }
    }
    ?>
    
</body>
</html>