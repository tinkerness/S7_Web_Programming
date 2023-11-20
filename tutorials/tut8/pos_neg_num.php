<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>positive or negative</title>
</head>
<body>
    <h1>positive or negative</h1>
    <form method="post" action="pos_neg_num.php">
        Enter a number : <input type="text" name="num" />
        <br/><br/>
        <input type="submit" value="Check" />
        <br/><br/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num"])) {
            $number = $_POST["num"];
            if (is_numeric($number)) {
                $message = ($number >= 0) ? "The number $number is positive." : "The number $number is negative.";

                echo "$message"; 
            }
            else {
                echo "Please enter a valid number.";
            }
        }
    }       
    ?>
</body>
</html>