<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str1 = "banana";
    $str2 = "orange";

    $res = strcmp($str1,$str2);
    echo "strcmp value = " . $res . "<br><br>";

    if ($res < 0) {
        echo "$str1 comes before $str2 alphabetically";
    }
    elseif ($res == 0) {
        echo "$str1 & $str2 are equal";
    }
    else {
        echo "$str1 comes after $str2 alphabetically";
    }
    
    ?>
</body>
</html>