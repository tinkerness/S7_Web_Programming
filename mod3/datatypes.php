<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Anitta";
    if (is_string($name)) {
        echo "datatype of $name is string<br/><br/>";
    }
    $height = 100.00;
    if (is_float($height)) {
        echo "datatype of $height is float";
    }
    ?>
</body>
</html>