<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Factorial</h1>
    <form method="post" action="factorial.php">
        Enter a number to find factorial: <input type="text" name="num" />
        <br/><br/>
        <input type="submit" value="Find Factorial" />
        <br/><br/>
    </form>
    <?php
    function calculatefactorial($num) {
        if ($num == 0 || $num == 1) {
            return 1;
        } else {
            return $num * calculatefactorial($num - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num"])) {
            $number = $_POST["num"];
            if (is_numeric($number)) {
                $factorial = calculatefactorial($number);
                echo "The factorial of $number is : $factorial"; 
            }
            else {
                echo "Please enter a valid number.";
            }
        }
    }       
    ?>
</body>
</html>