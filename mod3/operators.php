<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;
        echo "a = $a <br> b = $b<br>";
        
        echo '<br><b>Arithmetic Operators</b><br>';
        echo 'a + b = '.$a+$b; echo '<br>';
        echo 'a - b = '.$a-$b; echo '<br>';
        echo 'a * b = '.$a*$b; echo '<br>';
        echo 'a / b = '.$a/$b; echo '<br>';
        echo 'a % b = '.$a%$b; echo '<br>';

        $new_a = $a;
        $a++;
        echo "a++ = $a"; echo '<br>';
        $a = $new_a;
        $a--;
        echo "a-- = $a"; echo '<br>';
    ?>
</body>
</html>