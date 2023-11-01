<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("MINSIZE",50);
        echo MINSIZE; echo '<br>';
        echo constant("MINSIZE"); echo '<br>';
        define("ONE",     "first thing");
        echo ONE; echo '<br>';
        define("TWO2",     "second thing");
        echo TWO2; echo '<br>';
        define("THREE_3",     "third thing");
        echo THREE_3; echo '<br>';
        define("__FOUR__",     "fourth thing");
        echo __FOUR__; echo '<br>';
    ?>
</body>
</html>