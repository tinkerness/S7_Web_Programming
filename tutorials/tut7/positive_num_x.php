<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Number</title>
</head>
<body>
    <h1>Positive Number</h1>

    <script>
        function askForPositiveNumber() {
            let number;
            // do {
                number = prompt("Enter a positive number:");
            // } while (number !== null && (isNaN(number) || parseFloat(number) <= 0));
            
            if (number !== null) {
                fetch('positive_num.php');
            }
        }
        askForPositiveNumber();
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = filter_input(INPUT_POST, 'number');
        if ($number !== false && $number > 0) {
            echo "You entered a positive number: $number";
        } else {
            echo "Invalid input. Please enter a positive number.";
        }
    }
    ?>
    
</body>
</html>