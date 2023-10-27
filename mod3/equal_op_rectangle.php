<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $height = 100;
    $width = 50;
    
    if ($width) {
        echo "The area of rectangle is ".$height*$width;
    }
    else {
        echo "The width should be non-zero number.";
    }
    ?>
</body>
</html>