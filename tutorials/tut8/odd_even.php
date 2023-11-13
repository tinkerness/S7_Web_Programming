<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
    <h1>Odd or Even Number Checker</h1>
    <form method="post" action="odd_even.php">
        Enter a number: <input type="text" name="num" />
        <input type="submit" value="Check" />
        <br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num"])) {
            $number = $_POST["num"];

            if (is_numeric($number)) {
                if ($number % 2 == 0) {
                    echo "The number $number is even.";
                } else {
                    echo "The number $number is odd.";
                }
            } 
            else {
                echo "Please enter a valid number.";
            }
        }
    }
    ?>

</body>
</html>