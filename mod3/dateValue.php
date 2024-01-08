<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"Web Programming using PHP";

        echo '<br><br> date("Y/m/d")';
        echo "<br>Today is " .date("Y/m/d");
        
        echo '<br><br> date("l") = '  .date("l");
        // l-day of the week, F-month, j-date value and S –suffix for the day
        echo '<br> date("l F jS") = ' .date("l F jS");
    ?>
</body>
</html>