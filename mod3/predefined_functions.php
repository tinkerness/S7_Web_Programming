<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10.5;
        $b = 5;
        echo "a = $a <br> b = $b<br>";
        
        echo '<br><b>Predefined Functions</b><br>';
        echo "floor($a) = ".floor($a); echo '<br>';
        echo "ceil($a) = ".ceil($a); echo '<br>';
        echo "round($a) = ".round($a); echo '<br>';
        echo "rand($a,$b) = ".rand($a,$b); echo '<br>';
        echo "srand($b) = ".srand($b); echo '<br>';
        echo "abs($a,$b) = ".abs($a); echo '<br>';
        echo "min($a,$b) = ".min($a,$b); echo '<br>';
        echo "max($a,$b) = ".max($a,$b); echo '<br>';
    ?>
</body>
</html>