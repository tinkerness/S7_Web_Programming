<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body>
<h1>Even or Odd Number Checker</h1>
    <form method="post">
        Enter a number: <input type="text" name="number" />
        <input type="submit" value="Check" />
        <br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "$number is even.";
            } else {
                echo "$number is odd.";
            }
        } else {
            echo "Please enter a valid number.";
        }
    }
    ?>

</body>
</html>