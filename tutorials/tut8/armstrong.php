<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <form method="post" action="armstrong.php">
        Enter a number: <input type="text" name="num" />
        <input type="submit" value="Check" />
        <br/><br/>
    </form>

    <?php
    function isArmstrong($number) {
        $numStr = (string)$number;
        
        $sum = 0;
        
        // sum of each digit raised to the power of the number of digits
        $numDigits = strlen($numStr);
        for ($i = 0; $i < $numDigits; $i++) {
            $digit = (int)$numStr[$i];
            $sum += pow($digit, $numDigits);
        }
        
        // Check if the sum is equal to the original number
        if ($sum == $number) {
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num"])) {
            $numberToCheck = $_POST["num"];

            if (is_numeric($numberToCheck)) {
                if (isArmstrong($numberToCheck)) {
                    echo "$numberToCheck is an Armstrong number.";
                } else {
                    echo "$numberToCheck is not an Armstrong number.";
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